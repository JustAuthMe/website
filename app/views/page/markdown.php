<?php

use PitouFW\Entity\Page;

/** @var Page $page */
/** @var Parsedown $parser */

?>
<article class="page">
    <h1 class="h2 mb-5"><?= $page->getTitle() ?></h1>
    <?= $parser->text($page->getContent()) ?>
</article>