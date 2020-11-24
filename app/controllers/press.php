<?php

use PitouFW\Core\Controller;

\PitouFW\Core\Data::get()->add('TITLE', L::footer_resources_press);
Controller::renderView('home/press');
