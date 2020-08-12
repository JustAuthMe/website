<?php

use function PitouFW\Core\t;

?>
<header class="page-header page-header-dark bg-gradient-primary-to-secondary">
    <div class="page-header-content mb-n5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="page-header-title"><?= L::baseline ?></h1>
                    <p class="page-header-text mb-5"><?= L::home_header_concept(NAME) ?></p>
                    <div class="mb-5 mb-lg-0">
                        <a class="mr-3" href="<?= L::links_stores_apple ?>">
                            <img src="<?= IMG ?>stores_badges/apple_<?= t()->getAppliedLang() ?>.png" style="height: 3rem;"/>
                        </a>
                        <a href="<?= L::links_stores_google ?>">
                            <img src="<?= IMG ?>stores_badges/google_<?= t()->getAppliedLang() ?>.png" style="height: 3rem;"/>
                        </a>
                    </div>
                    <form action="" method="post">
                        <div class="form-row justify-content-start mt-5">
                            <div class="col-lg-6 col-md-8">
                                <div class="form-group mr-0 mr-lg-2">
                                    <label class="sr-only" for="email"><?= L::home_header_form_label ?></label>
                                    <input class="form-control form-control-solid rounded-pill" id="email" name="email"
                                           type="email" required placeholder="<?= L::home_header_form_label ?>" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <button class="btn btn-blue btn-block btn-marketing rounded-pill" type="submit">
                                    <?= L::home_header_form_submit ?>
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="page-header-text small mb-0">
                        <?= L::home_header_form_notice(L::links_pages_legal_terms) ?>
                    </p>
                </div>
                <div class="col-lg-6 z-1" data-aos="fade-left">
                    <div class="device-wrapper mx-auto mb-n15">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <video autoplay="" loop="" muted="" height="100%" style="margin-left: 1px">
                                    <source src="<?= ASSETS; ?>demo.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-waves text-white">
        <svg class="wave" style="pointer-events: none" fill="currentColor" preserveAspectRatio="none"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
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
<section class="bg-white py-10">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="smartphone"></i></div>
                <h3><?= L::home_advantages_app_title ?></h3>
                <p class="mb-0"><?= L::home_advantages_app_desc(NAME) ?></p>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="lock"></i></div>
                <h3><?= L::home_advantages_security_title ?></h3>
                <p class="mb-0"><?= L::home_advantages_security_desc ?></p>
            </div>
            <div class="col-lg-4">
                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4"><i data-feather="user"></i></div>
                <h3><?= L::home_advantages_privacy_title ?></h3>
                <p class="mb-0"><?= L::home_advantages_privacy_desc ?></p>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-10">
    <div class="container">
        <div class="row brands text-gray-500 align-items-center justify-content-around mb-5">
            <a href="https://restau-sans-contact.fr">
                <img src="<?= IMG ?>partners/rsc.png" height="45" alt="Restau sans contact" />
            </a>
            <a href="https://my-seedbox.com">
                <img src="<?= IMG ?>partners/msb.png" height="45" alt="My Seedbox" />
            </a>
            <a href="https://odysseeverte.fr">
                <img src="<?= IMG ?>partners/ov.png" height="45" alt="L'Odyssée Verte" />
            </a>
            <a href="https://pulseheberg.com">
                <img src="<?= IMG ?>partners/ph.png" height="45" alt="PulseHeberg" />
            </a>
        </div>
        <div class="row justify-content-center z-1">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="card lift mb-n15">
                    <iframe class="video" id="ytvid"
                            src=""
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen="" frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-10" id="pricing">
    <div class="container">
        <div class="text-center mb-5">
            <h2><?= L::home_pricing_title ?></h2>
            <p class="lead"><?= L::home_pricing_subtitle ?></p>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="card pricing h-100">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <div class="badge badge-light badge-pill badge-marketing badge-sm"><?= L::home_pricing_plans_free_badge ?></div>
                            <div class="pricing-price">0<sup>€</sup><span class="pricing-price-period">/<?= L::home_pricing_month ?></span></div>
                        </div>
                        <ul class="fa-ul pricing-list">
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_free_line1 ?></span>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_free_line2 ?></span>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_free_line3 ?></span>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>
                                <?= L::home_pricing_plans_free_line4 ?>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-circle text-gray-200"></i></span>
                                <?= L::home_pricing_plans_free_line5 ?>
                            </li>
                        </ul>
                    <div class="mt-5 text-center">
                        <a class="btn btn-primary-soft btn-marketing rounded-pill" href="#"><?= L::home_pricing_plans_free_submit ?></a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="card pricing h-100 soon">
                    <div class="overlay"></div>
                    <div class="card-body p-5">
                        <div class="text-center">
                            <div class="badge badge-danger badge-pill badge-marketing badge-sm text-white"><?= L::home_pricing_plans_standard_badge ?></div>
                            <div class="pricing-price">-<sup>€</sup><span class="pricing-price-period">/<?= L::home_pricing_month ?></span></div>
                        </div>
                        <ul class="fa-ul pricing-list">
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_standard_line1 ?></span>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_standard_line2 ?></span>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_standard_line3 ?></span>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_standard_line4 ?></span>
                            </li>
                            <li class="pricing-list-item">
                                <span class="fa-li"><i class="far fa-check-circle text-teal"></i></span>
                                <span class="text-dark"><?= L::home_pricing_plans_standard_line5 ?></span>
                            </li>
                        </ul>
                    <div class="mt-5 text-center">
                        <a class="btn btn-primary btn-marketing rounded-pill" href="#"><?= L::home_pricing_plans_standard_submit ?></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-10">
    <div id="team">
        <h1><?= L::home_team_title ?></h1>
        <div class="content">
            <div class="board">
                <div class="member">
                    <a href="https://peter.cauty.fr">
                        <img src="<?= IMG ?>team/peter.jpg">
                    </a>
                    <div class="name">Peter Cauty</div>
                    <div class="status"><?= L::home_team_peter_line1 ?></div>
                    <div class="role"><?= L::home_team_peter_line2 ?></div>
                </div>
                <div class="member">
                    <a href="https://fr.linkedin.com/in/jeremypgn">
                        <img src="<?= IMG ?>team/jeremy.jpg">
                    </a>
                    <div class="name">Jérémy Pingeon</div>
                    <div class="status"><?= L::home_team_jeremy_line1 ?></div>
                    <div class="role"><?= L::home_team_jeremy_line2 ?></div>
                </div>
            </div>
            <div>
                <div class="member">
                    <img src="<?= IMG ?>team/antoine.jpg">
                    <div class="name">Antoine Fogel</div>
                    <div class="role">
                        <?= L::home_team_antoine_line1 ?><br />
                        <?= L::home_team_antoine_line2 ?>
                    </div>
                </div>
                <div class="member">
                    <a href="https://instagram.com/kya.schizophrenia">
                        <img src="<?= IMG ?>team/kassandra.jpg">
                    </a>
                    <div class="name">Kassandra de Clercq</div>
                    <div class="role">
                        <?= L::home_team_kassandra_line1 ?><br />
                        <?= L::home_team_kassandra_line2 ?>
                    </div>
                </div>
                <div class="member">
                    <a href="https://www.linkedin.com/in/alessandro-taccola-b42231a9">
                        <img src="<?= IMG ?>team/alessandro.jpg">
                    </a>
                    <div class="name">Alessandro Taccola</div>
                    <div class="role">
                        <?= L::home_team_alessandro_line1 ?><br />
                        <?= L::home_team_alessandro_line2 ?>
                    </div>
                </div>
                <div class="member">
                    <a href="https://victorlabro.fr">
                        <img src="<?= IMG ?>team/victor.jpg">
                    </a>
                    <div class="name">Victor Labro</div>
                    <div class="role">
                        <?= L::home_team_victor_line1 ?><br />
                        <?= L::home_team_victor_line2 ?>
                    </div>
                </div>
                <div class="member">
                    <a href="https://charley.sedeau.com">
                        <img src="<?= IMG ?>team/charley.jpg">
                    </a>
                    <div class="name">Charley Sedeau</div>
                    <div class="role">
                        <?= L::home_team_charley_line1 ?><br />
                        <?= L::home_team_charley_line2 ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h4><?= L::home_download_title ?></h4>
                <p class="lead mb-5 mb-lg-0"><?= L::home_download_subtitle ?></p>
            </div>
            <div class="col-lg-6 text-lg-right">
            <a class="mr-3" href="<?= L::links_stores_apple ?>"><img src="<?= IMG ?>stores_badges/apple_<?= t()->getAppliedLang() ?>.png" style="height: 3rem;"/></a>
                <a href="<?= L::links_stores_google ?>"><img src="<?= IMG ?>stores_badges/google_<?= t()->getAppliedLang() ?>.png" style="height: 3rem;"/></a>
            </div>
        </div>
    </div>
    <div class="svg-border-waves text-dark">
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
</section>
<script type="text/javascript">
    setTimeout(() => {
        const ytvid = document.getElementById('ytvid');
        ytvid.src = 'https://www.youtube-nocookie.com/embed/Z54dVXdGLqk?rel=0&controls=1&playsinline=1';
        ytvid.style.height = parseInt(ytvid.clientWidth * .5625) + 'px';
    }, 1000);

</script>