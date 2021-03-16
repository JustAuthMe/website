<?php

use PitouFW\Core\Request;
use function PitouFW\Core\webroot;

switch (Request::get()->getArg(1)) {
    case 'ios':
        header('location: ' . L::links_stores_apple);
        die;

    case 'android':
        header('location: ' . l::links_stores_google);
        die;
}

header('location: ' . webroot());
die;
