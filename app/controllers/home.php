<?php

use PitouFW\Core\Controller;
use PitouFW\Core\Data;

if (POST) {
    if ($_POST['email'] !== '') {
        $postdata = http_build_query([
            'email' => $_POST['email'],
            'ip' => $_SERVER['REMOTE_ADDR']
        ]);
        $opts = ['http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded' . "\r\n" .
                'X-Access-Token: ' . JAM_INTERNAL_API_KEY . "\r\n",
            'content' => $postdata,
            'ignore_errors' => true
        ]];
        $context = stream_context_create($opts);

        $response = json_decode(file_get_contents(JAM_API . 'customer', false, $context));
        switch ((int) substr($http_response_header[0], 9, 3)) {
            case 200:
                Data::get()->add('status', 'success');
                break;

            case 409:
                Data::get()->add('status', 'error');
                Data::get()->add('error', 'Vous êtes déjà inscrit à la newsletter. C\'est plutôt une bonne nouvelle :)');
                break;

            case 429:
                Data::get()->add('status', 'error');
                Data::get()->add('error', 'Vous devez attendre 10 secondes au moins entre chaque abonnement. Un peu de patience ;)');
                break;

            default:
                Data::get()->add('status', 'error');
                Data::get()->add('error', 'Une erreur inconnue est survenue durant la demande d\'abonnement. Si le problème persiste, merci de <a href="mailto:support@justauth.me">contacter le support</a>');
        }
    }
}

Data::get()->add('TITLE', 'Accueil');
Controller::renderView('home/home');