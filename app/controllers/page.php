<?php

use PitouFW\Core\Controller;
use PitouFW\Core\Data;
use PitouFW\Core\Persist;
use PitouFW\Core\Request;
use PitouFW\Entity\Page;
use function PitouFW\Core\t;

if (Persist::exists('Page', 'route', Request::get()->getArg(1))) {
    /** @var Page $page */
    $page = Persist::readBy('Page', 'route', Request::get()->getArg(1));
    if ($page->isPublished() || (isset($_GET['render_key']) && $_GET['render_key'] === PAGE_RENDERING_KEY)) {
        if ($page->isPublished()) {
            if (Request::get()->getLang() === null) {
                Controller::http301MovedPermanently();
                header('location: ' . WEBROOT . $page->getLang() . '/p/' . $page->getRoute());
                die;
            }

            if (t()->getAppliedLang() !== $page->getLang()) {
                Controller::http404NotFound();
            }

            $page->setViews($page->getViews() + 1);
            Persist::update($page);
        }

        $parsedown = new Parsedown();
        Data::get()->add('TITLE', $page->getTitle());
        Data::get()->add('parser', new Parsedown());
        Data::get()->add('page', $page);
        Controller::renderView('page/markdown');
    } else {
        Controller::http404NotFound();
    }
} else {
    Controller::http404NotFound();
}
