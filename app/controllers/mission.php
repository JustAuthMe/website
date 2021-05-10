<?php

use PitouFW\Core\Controller;
use PitouFW\Core\Data;

Data::get()->add('TITLE', NAME . ' - ' . L::mission_title);
Data::get()->add('DESC', L::mission_desc);
Controller::renderView('home/mission');
