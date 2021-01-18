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
                Data::get()->add('newsletter_msg', L::newsletter_body_success);
                break;

            case 400:
                Data::get()->add('status', 'error');
                Data::get()->add('newsletter_msg', L::newsletter_body_error_bad_request);
                break;

            case 409:
                Data::get()->add('status', 'success');
                Data::get()->add('newsletter_msg', L::newsletter_body_error_conflict);
                break;

            case 429:
                Data::get()->add('status', 'error');
                Data::get()->add('newsletter_msg', L::newsletter_body_error_too_many);
                break;

            default:
                Data::get()->add('status', 'error');
                Data::get()->add('newsletter_msg', L::newsletter_body_error_unknow);
        }
    }
}

Controller::renderView('home/home');
