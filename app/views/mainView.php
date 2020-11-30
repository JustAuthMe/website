<?php

use PitouFW\Core\Request;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?= L::meta_description ?>" />
    <title><?= NAME . (isset($TITLE) ? ' - ' . $TITLE : '') ?></title>
    <link href="<?= CSS; ?>styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= CSS; ?>aos.css" />
    <link rel="stylesheet" href="<?= CSS; ?>custom.css">
    <link rel="icon" type="image/x-icon" href="<?= IMG ?>/icon.png" />
    <script data-search-pseudo-elements defer src="<?= JS ?>font-awesome.min.js" crossorigin="anonymous"></script>
    <script src="<?= JS ?>feather.min.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="my-cookies" id="cookies_prompt">
    <aside class="actions">
        <button onclick="setCookiesChoice(true)" class="btn btn-primary"><?= L::cookies_buttons_accept ?></button>
        <button onclick="setCookiesChoice(false)" class="btn btn-primary ml-2"><?= L::cookies_buttons_decline ?></button>
    </aside>
    <p>
        <?= L::cookies_text ?>
    </p>
</div>
<div id="layoutDefault">
    <div id="layoutDefault_content">
        <main>
            <nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light">
                <div class="container">
                    <a class="navbar-brand text-primary" href="<?= WEBROOT; ?>">
                        <img style="height: 1.5rem;" src="<?= IMG ?>logo-txt.svg" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mr-lg-5">
                            <li class="nav-item"><a class="nav-link" href="<?= WEBROOT; ?>"><?= L::navbar_home ?> </a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="#"><?= L::navbar_concept ?> </a></li> -->
                            <li class="nav-item"><a class="nav-link" href="<?= WEBROOT ?>#pricing"><?= L::navbar_pricing ?> </a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= WEBROOT ?>p/<?= L::links_pages_faq ?>"><?= L::navbar_faq ?> </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://blog.justauth.me/"><?= L::navbar_blog ?> </a></li>
                            <li class="nav-item"><a class="nav-link" href="https://core.justauth.me/rescue"><?= L::navbar_rescue ?> </a></li>
                        </ul>
                        <a class="btn-primary btn rounded-pill px-4 ml-lg-4" href="https://developers.justauth.me/"><i class="fas fa-star"></i>&nbsp;&nbsp;<?= L::navbar_developers ?></i></a>
                    </div>
                </div>
            </nav>
            <?php require_once @$appView; ?>
        </main>
    </div>
    <div id="layoutDefault_footer">
        <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand"><?= NAME ?></div>
                        <div class="mb-3"><?= L::baseline ?></div>
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="https://twitter.com/justauthmefr"><i class="fab fa-twitter"></i></a>
                            <a class="icon-list-social-link" href="https://www.facebook.com/justauthme/"><i class="fab fa-facebook"></i></a>
                            <a class="icon-list-social-link" href="https://www.instagram.com/justauthme/"><i class="fab fa-instagram"></i></a>
                            <a class="icon-list-social-link" href="https://www.linkedin.com/company/justauthme/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4"><?= L::footer_products_label ?></div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="#"><?= L::footer_products_app ?></a></li>
                                    <li class="mb-2"><a href="https://developers.justauth.me"><?= L::footer_products_panel ?></a></li>
                                    <!-- <li class="mb-2"><a href="#"><?= L::footer_products_prestashop ?></a></li> -->
                                    <li class="mb-2"><a href="https://github.com/justauthme/wordpress-plugin"><?= L::footer_products_wordpress ?></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4"><?= L::footer_resources_label ?></div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="<?= WEBROOT ?>press"><?= L::footer_resources_press ?></a></li>
                                    <li class="mb-2"><a href="https://blog.justauth.me/"><?= L::footer_resources_blog ?></a></li>
                                    <li class="mb-2"><a href="https://github.com/justauthme"><?= L::footer_resources_github ?></a></li>
                                    <li class="mb-2"><a href="https://developers.justauth.me/documentation"><?= L::footer_resources_doc ?></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4"><?= L::footer_contact_label ?></div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="mailto:press@justauth.me"><?= L::footer_contact_press ?></a></li>
                                    <li class="mb-2"><a href="mailto:partnership@justauth.me"><?= L::footer_contact_partnerships ?></a></li>
                                    <li class="mb-2"><a href="mailto:marketing@justauth.me"><?= L::footer_contact_marketing ?></a></li>
                                    <li class="mb-2"><a href="mailto:contact@justauth.me"><?= L::footer_contact_other ?></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4"><?= L::footer_legal_label ?></div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="<?= WEBROOT ?>p/<?= L::links_pages_legal_notice ?>"><?= L::footer_legal_notice ?></a></li>
                                    <li class="mb-2"><a href="<?= WEBROOT ?>p/<?= L::links_pages_legal_privacy ?>"><?= L::footer_legal_privacy ?></a></li>
                                    <li class="mb-2"><a href="<?= WEBROOT ?>p/<?= L::links_pages_legal_terms ?>"><?= L::footer_legal_terms ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5" />
                <div class="row align-items-center">
                    <div class="col-md-6 small"><?= L::footer_copyright_copyright ?> &copy; <?= NAME ?> 2019 - <?= date('Y'); ?> &middot; <?= L::footer_copyright_all_rights ?>.</div>
                    <div class="col-md-6 text-md-right small">
                        <a href="<?= WEBROOT ?>?lang=fr" title="<?= L::footer_langs_fr ?>"><img src="<?= IMG ?>flags/fr.svg" height="20"></a>
                        &middot;
                        <a href="<?= WEBROOT ?>?lang=en" title="<?= L::footer_langs_en ?>"><img src="<?= IMG ?>flags/us.svg" height="20"></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="subModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= L::newsletter_title ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="<?= L::newsletter_close ?>">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center">
                <i class="d-block text-center mb-3 fa fa-<?= isset($status) && $status === 'success' ? 'check-circle text-success' : 'times text-danger' ?>" style="font-size: 70px"></i>
                <p><?= $newsletter_msg ?? '' ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= L::newsletter_close ?></button>
            </div>
        </div>
    </div>
</div>

<script src="<?= JS ?>jquery.min.js"></script>
<script src="<?= JS ?>bootstrap.min.js"></script>
<script src="<?= JS ?>scripts.js"></script>
<script src="<?= JS ?>aos.js"></script>
<script src="<?= JS ?>mtm.js"></script>
<script>
    AOS.init({
        disable: 'mobile',
        duration: 600,
        once: true
    });
</script>
<?php if (isset($status)): ?>
    <script type="text/javascript">
        $('#subModal').modal();
    </script>
<?php endif ?>
</body>
</html>

