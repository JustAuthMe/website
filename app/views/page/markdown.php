<?php

use PitouFW\Entity\Page;

/** @var Page $page */
/** @var Parsedown $parser */

?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary">
    <div class="page-header-content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="page-header-title mb-3"><?= $page->getTitle() ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
</header>
<section class="bg-white py-10 page">
    <div class="container">
        <?= preg_replace("#^<hr class=\"my-5\" />#", '', str_replace('<h2>', '<hr class="my-5" /><h2 class="mb-3">', $parser->text($page->getContent()))) ?>
    </div>
</section>
