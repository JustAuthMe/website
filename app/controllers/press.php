<?php

use PitouFW\Core\Controller;
use PitouFW\Core\Data;

Data::get()->add('TITLE', L::footer_resources_press);
Controller::renderView('home/press');
