<?php

use PitouFW\Core\Controller;
use PitouFW\Core\Data;

Data::get()->add('TITLE', 'Concept de JustAuthMe');
Controller::renderView('home/concept');