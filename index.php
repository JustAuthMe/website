<!DOCTYPE HTML>
<html>
	<head>
		<title>JustAuth.Me - Coming soon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
    <div class="my-alert">
        <span class="my-close icon regular fa-times-circle" onclick="closeAlert()" title="Close"></span>
        <span class="alert-text"></span>
    </div>
		<!-- Header -->
			<header id="header">
				<div class="content">
					<h1><a href="#">JustAuth.Me</a></h1>
					<p>Passwordless identity provider</p>
                    <form method="post" action="" onsubmit="submitForm();return false">
                        <ul class="actions">
                            <li><input class="email" type="email" placeholder="Adresse E-Mail" name="email" required /></li>
                            <li><input type="submit" value="Go !" class="primary" /></li>
                        </ul>
                    </form>
                    <ul class="actions">
                        <li><a href="#two" class="button icon solid fa-chevron-down scrolly">En savoir plus</a></li>
                    </ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/screen.jpg" alt="" /></div></div>
			</header>

		<!-- Two -->
			<section id="two" class="wrapper">
				<div class="inner alt">
					<section class="spotlight">
						<div class="image"><img src="images/pic01.jpg" alt="" /></div>
						<div class="content">
							<h3>Connectez-vous partout</h3>
							<p>
                                Dites adieu aux formulaires interminables, aux mots de passe, aux codes reçus par SMS,
                                et profitez simplement des sites web et des applications que vous aimez, en vous laissant
                                porter par la simplicité de JustAuth.Me. Installez l'app, renseignez des informations
                                basiques vous concernant, et connectez-vous sur tous les sites et applis de nos partenaires
                                en un clin d'oeil.
                            </p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic02.jpg" alt="" /></div>
						<div class="content">
							<h3>- de complexité, + de sécurité</h3>
							<p>
                                Les informations vous concernant sont stockées uniquement sur votre smartphone et c'est le
                                système biométrique de celui-ci qui sert à vous authentifier: le concept même du mot de
                                passe est oublié et vos informations ne sont pas centralisées sur nos serveurs. Les tentatives
                                d'usurpation d'identié et ou de phishing sont ainsi réduites à néant.
                            </p>
						</div>
					</section>
                    <section class="spotlight">
                        <div class="image"><img src="images/pic03.jpg" alt="" /></div>
                        <div class="content">
                            <h3>Contrôlez votre vie privée</h3>
                            <p>
                                Gérez les sites & applis sur lesquelles vous êtes inscrit, demandez une suppression
                                de vos comptes et informations et créez plusieurs profils pour ne pas dévoiler votre
                                véritable identité. Et comme nous ne stockons pas vos informations, nous
                                ne savons pas qui vous êtes !
                            </p>
                        </div>
                    </section>
                    <section class="spotlight">
                        <div class="image"><img src="images/pic04.jpg" alt="" /></div>
                        <div class="content">
                            <h3>Multi-plateformes, multi-usages</h3>
                            <p>
                                Que vous souhaitiez vous connecter depuis un ordinateur, une tablette ou un téléphone,
                                que vous soyez un utilisateur d'iOS ou d'Android, de Windows ou de Linux, JustAuth.Me
                                fonctionne de la même manière partout, en vous offrant toujours la meilleure expérience.
                                La seule chose requise est votre smartphone. Rien de plus à posséder, installer ou configurer.
                            </p>
                        </div>
                    </section>
					<section class="special">
						<ul class="icons labeled">
							<li><span class="icon solid fa-atom"><span class="label">Simple & rapide</span></span></li>
							<li><span class="icon solid fa-sync"><span class="label">Fiable & sécurisé</span></span></li>
							<li><span class="icon solid fa-cloud"><span class="label">Disponible partout</span></span></li>
							<li><span class="icon solid fa-user-lock"><span class="label">Vie privée préservée</span></span></li>
							<li><span class="icon solid fa-flag"><span class="label">Made in France</span></span></li>
						</ul>
					</section>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2 special">
                <h3>Intéressé ? Laissez-nous votre E-Mail pour être tenu au courant du lancement !</h3>
                <form method="post" action="" onsubmit="submitForm(1);return false">
                    <ul class="actions special">
                        <li><input class="email" type="email" placeholder="Adresse E-Mail" name="email" required /></li>
                        <li><input type="submit" value="Go !" class="primary" /></li>
                    </ul>
                </form>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a target="_blank" href="https://www.facebook.com/JustAuthMe" class="icon brands fa-facebook-f" title="Facebook"><span class="label">Facebook</span></a></li>
					<li><a target="_blank" href="https://twitter.com/JustAuthMe" class="icon brands fa-twitter" title="Twitter"><span class="label">Twitter</span></a></li>
					<li><a target="_blank" href="https://instagram.com/justauthme" class="icon brands fa-instagram" title="Instagram"><span class="label">Instagram</span></a></li>
					<li><a target="_blank" href="mailto:contact@justauth.me" class="icon fa-envelope" title="E-Mail"><span class="label">E-Mail</span></a></li>
				</ul>
				<p class="copyright">&copy; 2019<?= date('Y') > '2019' ? ' - ' . date('Y') : '' ?> JustAuthMe SAS. Design: <a target="_blank" href="http://html5up.net">HTML5 UP</a></p>
                <p class="copyright"><a target="_blank" href="privacy-policy.pdf">Politique de confidentialité</a></p>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script type="text/javascript">
                var user_lang = '<?= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?>';
            </script>
            <script src="assets/js/script.js"></script>
	</body>
</html>