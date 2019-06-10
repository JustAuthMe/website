<!doctype html>
<html lang="<?= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?>">
	<head>
		<title>JustAuth.Me - Coming soon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
	</head>

	<body>
		<div class="alert">
			<span class="close" onclick="closeAlert()">X</span>
			<span class="alert-text"></span>
		</div>
		<div class="container">
			<div class="logo">
				<p class="text">Login everywhere without even thinking about it. Coming soon...</p>
			</div>
			<div class="content">
				<p class="question">Would you want updates from us regarding our launch?</p>
				<form class="form" method="post" action="" onsubmit="submitForm();return false">
					<input class="email" type="email" name="email" placeholder="Just enter your E-Mail address" />
					<button class="submit">Keep me in touch!</button>
				</form>
			</div>
		</div>
		<div class="social-container">
			<div class="social">
				<a href="https://www.facebook.com/JustAuthMe-317070005657717" target="_blank" rel="noopener" title="Facebook">
					<img src="img/facebook.png" alt="Instagram Logo" />
				</a>
				<a href="https://twitter.com/JustAuthMe" target="_blank" rel="noopener" title="Twitter">
					<img src="img/twitter.png" alt="Instagram Logo" />
				</a>
				<a href="https://instagram.com/justauthme" target="_blank" rel="noopener" title="Instagram">
					<img src="img/instagram.png" alt="Instagram Logo" />
				</a>
                <a href="mailto:contact@justauth.me" target="_blank" rel="noopener" title="E-Mail">
                    <img src="img/email.png" alt="E-Mail Logo" />
                </a>
			</div>
		</div>

        <script type="text/javascript">
            var user_lang = '<?= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?>';
        </script>
        <script type="text/javascript" src="script.js"></script>
	</body>
</html>