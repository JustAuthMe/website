<?php

use function PitouFW\Core\webroot;

?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary">
    <div class="page-header-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <h1 class="page-header-title"><?= L::mission_title ?></h1>
                    <p class="page-header-text mb-5">
                        Nous croyons fermement que les formulaires et les mots de passe ont fait leur temps. De nos jours,
                        il existe des technologies plus fiables, robustes et faciles d'utilisation qui remplaceront à
                        terme totalement les mots de passe.
                    </p>
                    <a class="btn btn-blue btn-marketing rounded-pill lift lift-sm" href="<?= webroot() ?>p/<?= L::links_pages_manifest ?>">
                        <i class="fas fa-newspaper"></i>&nbsp;&nbsp;Lire le manifeste
                    </a>
                </div>
                <div class="col-lg-6 d-none d-lg-block" data-aos="fade-up" data-aos-delay="50"><img class="img-fluid" src="<?= IMG ?>our_mission.svg" /></div>
            </div>
        </div>
    </div>
    <div class="svg-border-waves text-light">
        <svg class="wave" style="pointer-events: none" fill="currentColor" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
            <defs>
                <style>
                    .a {
                        fill: none;
                    }
                    .b {
                        clip-path: url(#a);
                    }
                    .d {
                        opacity: 0.5;
                        isolation: isolate;
                    }
                </style>
                <clippath id="a"><rect class="a" width="1920" height="75"></rect></clippath>
            </defs>
            <title>wave</title>
            <g class="b"><path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path></g>
            <g class="b"><path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path></g>
            <g class="b"><path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path></g>
            <g class="b"><path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path></g>
        </svg>
    </div>
</header>
<section class="bg-light">
    <div class="container">
        <div class="row py-10">
            <div class="col-lg-6">
                <img class="img-fluid" src="<?= IMG ?>our_mission.svg" />
            </div>
            <div class="col-lg-6">
                <h1>lorem ipsum</h1>
                <p>lorem ipsum</p>
            </div>
        </div>
        <div class="row py-10">
            <div class="col-lg-6">
                <h1>lorem ipsum</h1>
                <p>lorem ipsum</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="<?= IMG ?>our_mission.svg" />
            </div>
        </div>
        <div class="row py-10">
            <div class="col-lg-6">
                <img class="img-fluid" src="<?= IMG ?>our_mission.svg" />
            </div>
            <div class="col-lg-6">
                <h1>lorem ipsum</h1>
                <p>lorem ipsum</p>
            </div>
        </div>
    </div>
</section>
