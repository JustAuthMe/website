<?php
require_once 'config.example.php';

abstract class DB {
    private static
        $instance = null,
        $db_host = DB_HOST,
        $db_name = DB_NAME,
        $db_user = DB_USER,
        $db_pass = DB_PASS;

    public static function get(): PDO {
        if (self::$instance == null) {
            try	{
                self::$instance = new PDO('mysql:host='.self::$db_host.';dbname='.self::$db_name, self::$db_user, self::$db_pass);
                self::$instance->exec("SET CHARACTER SET utf8");
            }
            catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }

        return self::$instance;
    }
}

DB::get()->query("DELETE FROM customer_flood WHERE next_timestamp < " . time());

$req = DB::get()->prepare("SELECT COUNT(*) AS cnt FROM banned_ip WHERE ip_address = ?");
$req->execute([$_SERVER['REMOTE_ADDR']]);
$res = $req->fetch();
$req->closeCursor();

if ($res['cnt'] > 0) {
    header('HTTP/1.1 403 Forbidden');
    die;
}

$req = DB::get()->prepare("SELECT COUNT(*) AS cnt FROM customer_flood WHERE ip_address = ? AND next_timestamp >= " . time());
$req->execute([$_SERVER['REMOTE_ADDR']]);
$res = $req->fetch();
$req->closeCursor();

if ($res['cnt'] > 0) {
    header('HTTP/1.1 429 Too many requests');
    die;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('HTTP/1.1 400 Bad request');
    die;
}

$req = DB::get()->prepare("SELECT COUNT(*) AS cnt FROM customer WHERE email = ?");
$req->execute([$_POST['email']]);
$res = $req->fetch();
$req->closeCursor();

if ($res['cnt'] > 0) {
    header('HTTP/1.1 409 Conflict');
    die;
}

$req = DB::get()->prepare("INSERT INTO customer (email, timestamp, ip_address) VALUES(?, ?, ?)");
$req->execute([$_POST['email'], time(), $_SERVER['REMOTE_ADDR']]);

$req = DB::get()->prepare("INSERT INTO customer_flood (ip_address, next_timestamp) VALUES(?, ?)");
$req->execute([$_SERVER['REMOTE_ADDR'], time() + 5]);
