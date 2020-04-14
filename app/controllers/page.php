<?php

use PitouFW\Core\Controller;
use PitouFW\Core\Data;
use PitouFW\Core\Persist;
use PitouFW\Core\Request;
use PitouFW\Entity\Page;

if (Persist::exists('Page', 'route', Request::get()->getArg(1))) {
    /** @var Page $page */
    $page = Persist::readBy('Page', 'route', Request::get()->getArg(1));
    if ($page->isPublished()) {
        $page->setViews($page->getViews() + 1);
        Persist::update($page);

        $parsedown = new Parsedown();
        Data::get()->add('parser', new Parsedown());
        Data::get()->add('page', $page);
        Controller::renderView('page/markdown');
    } else {
        Controller::http404NotFound();
    }
} else {
    Controller::http404NotFound();
}
