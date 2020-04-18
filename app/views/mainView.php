<?php

use PitouFW\Core\Request;

?>
<!doctype html>
<html lang="fr">
	<head>
		<title><?= NAME . (isset($TITLE) ? ' - ' . $TITLE : '') ?></title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="<?= CSS . 'normalize.css' ?>" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?= CSS . 'bootstrap.jam.min.css' ?>" media="screen" />
        <link type="text/css" rel="stylesheet" href="<?= CSS . 'font-awesome.min.css' ?>" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?= CSS . 'style.css' ?>" media="screen" />
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />
        <link rel=icon type="image/png" href="<?= IMG ?>icon.png">
	</head>

	<body>
        <div class="my-cookies" id="cookies_prompt">
            <aside class="actions">
                <button onclick="setCookiesChoice(true)" class="btn btn-primary">Accepter</button>
                <button onclick="setCookiesChoice(false)" class="btn btn-primary ml-2">Refuser</button>
            </aside>
            <p>
                Ce site utilise des cookies à des fins de statistiques de visites, en interne uniquement et grâce au
                logiciel auto-hébergé <a href="https://fr.matomo.org/why-matomo/" target="_blank">Matomo</a>, sans aucune
                utilisation de tracker externe. Pour nous autoriser à inclure votre visite de notre site dans nos
                statistiques, cliquez sur "Accepter". Sinon, cliquez sur "Refuser".
            </p>
        </div>
        <header class="header fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?= WEBROOT ?>">
                    <img class="logo" src="<?= IMG ?>logo_txt.png" alt="JustAuthMe" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item <?= Request::get()->getArg(0) === 'home' ? 'active' : '' ?> about">
                            <a class="nav-link" href="<?= WEBROOT ?>#about">À Propos</a>
                        </li>
                        <li class="nav-item solution">
                            <a class="nav-link" href="<?= WEBROOT ?>#solution">La solution</a>
                        </li>
                        <li class="nav-item engagements">
                            <a class="nav-link" href="<?= WEBROOT ?>#engagements">Nos engagements</a>
                        </li>
                        <li class="nav-item pricing">
                            <a class="nav-link" href="<?= WEBROOT ?>#pricing">Tarifs</a>
                        </li>
                        <li class="nav-item team">
                            <a class="nav-link" href="<?= WEBROOT ?>#team">L'équipe</a>
                        </li>
                        <!-- <li class="nav-item <?= strpos(Request::get()->getArg(1), 'foire') !== false ? 'active' : '' ?>">
                            <a class="nav-link" href="<?= WEBROOT ?>p/foire-aux-questions">FAQ</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#devModal">
                                Développeurs
                            </a>
                        </li>
                    </ul>
                    <a href="https://core.justauth.me/rescue" target="_blank" rel="noopener" class="btn btn-primary lock d-lg-none mt-3">
                        <i class="fa fa-lock"></i>
                        Verrouiller mon compte
                    </a>
                </div>
                <a href="https://core.justauth.me/rescue" target="_blank" rel="noopener" class="btn btn-outline-primary lock d-none d-lg-block">
                    <i class="fa fa-lock"></i>
                    Verrouiller mon compte
                </a>
            </nav>
        </header>
        <main class="main">
    		<?php require_once @$appView; ?>
        </main>
        <footer class="footer d-flex flex-column align-items-center text-center">
            <nav class="social mt-5 mb-4">
                <a target="_blank" rel="noopener" href="https://www.facebook.com/justauthme/" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a target="_blank" rel="noopener" href="https://twitter.com/justauthme" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a target="_blank" rel="noopener" href="https://www.instagram.com/justauthme/" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="mailto:contact@justauth.me" title="E-Mail"><i class="fa fa-envelope"></i></a>
            </nav>
            <div class="copyright mb-4">Copyright &copy; 2019<?= Date('Y') > 2019 ? ' - ' . date('Y') : '' ?> JustAuthMe SAS</div>
            <nav class="legal mb-5">
                <a href="#">Mention légales</a> - <a href="<?= WEBROOT ?>p/politique-de-confidentialite">Politique de confidentialité</a>
            </nav>
        </footer>

        <div class="modal" tabindex="-1" role="dialog" id="devModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Vous êtes développeur ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            En attendant le portail dédié aux développeurs, contactez-nous pour
                            implémenter <strong>JustAuthMe</strong> sur votre site !
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="mailto:partnership@justauth.me" class="btn btn-primary">Nous contacter</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

		<script type="text/javascript" src="<?= JS.'jquery.min.js' ?>"></script>
		<script type="text/javascript" src="<?= JS.'popper.min.js' ?>"></script>
		<script type="text/javascript" src="<?= JS.'bootstrap.min.js' ?>"></script>
		<script type="text/javascript" src="<?= JS.'script.js' ?>"></script>
	</body>
</html>
