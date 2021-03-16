<?php

use PitouFW\Core\Controller;
use function PitouFW\Core\webroot;

Controller::http301MovedPermanently();
header('location: ' . webroot() . 'p/' . L::links_pages_legal_privacy);
die;
