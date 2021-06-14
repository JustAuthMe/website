<?php

use function PitouFW\Core\t;

?>
<!doctype html>
<html lang="<?= t()->getAppliedLang() ?>">
    <head>
        <title><?= $TITLE ?? L::meta_title ?></title>
        <meta name="description" content="<?= $DESC ?? L::meta_description ?>" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="robots" content="noindex, follow" />

        <link href="<?= CSS ?>login.css" rel="stylesheet" />

        <meta property="og:title" content="<?= $TITLE ?? L::meta_title ?>" />
        <meta property="og:description" content="<?= $DESC ?? L::meta_description ?>" />
        <meta property="og:site_name" content="<?= NAME ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://justauth.me/assets/img/open-graph.jpg" />
        <meta property="og:url" content="https://justauth.me" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@justauthme" />
    </head>
    <body>
        <audio src="<?= ASSETS ?>sounds/success.wav" autoplay></audio>
        <div class="container">
            <h2 class="title"><?= L::login_success ?></h2>
            <lottie-player
                    src="<?= ASSETS ?>animations/check-mark-success.json"
                    background="transparent"
                    speed="1"
                    autoplay
                    class="animation"
            ></lottie-player>
            <p class="text"><?= L::login_text ?></p>
            <a href="https://justauth.me/<?= t()->getAppliedLang() ?>/">
                <img src="<?= IMG ?>logo-txt-white.png" class="logo" alt="JustAuthMe" />
            </a>
            <div class="stores">
                <a href="<?= L::links_stores_apple ?>" class="apple">
                    <img src="<?= IMG ?>stores_badges/apple_<?= t()->getAppliedLang() ?>.png" alt="Apple App Store" />
                </a>
                <a href="<?= L::links_stores_google ?>" class="google">
                    <img src="<?= IMG ?>stores_badges/google_<?= t()->getAppliedLang() ?>.png" alt="Google Play Store" />
                </a>
            </div>
        </div>
        <script src="<?= JS ?>lottie-player.js"></script>
        <script type="text/javascript">
            var _paq = window._paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="https://analytics.justauth.me/";
                _paq.push(['setTrackerUrl', u+'matomo.php']);
                _paq.push(['setSiteId', '1']);
                var d=document,
                    g=d.createElement('script'),
                    s=d.getElementsByTagName('script')[0];
                g.type='text/javascript';
                g.async=true;
                g.defer=true;
                g.src=u+'matomo.js';
                s.parentNode.insertBefore(g,s);
            })();
        </script>
    </body>
</html>
