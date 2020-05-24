<section id="about" class="row">
    <div class="about_content col-md-6 pt-md-5">
        <h1 class="h2">L'identité numérique,<br />sans mot de passe</h1>
        <p>
            Dites adieu aux formulaires interminables, aux mots de passe,
            aux codes reçus par SMS. Profitez simplement des sites web et
            des applications que vous aimez en vous laissant porter par la
            simplicité de JustAuthMe.
        </p>
        <nav class="stores mb-3">
            <a href="https://apps.apple.com/fr/app/justauthme/id1506495629"><img class="mb-2" src="<?= IMG ?>stores_badges/apple_fr.png" /></a>
            <a href="https://play.google.com/store/apps/details?id=me.justauth.app.android"><img class="mb-2" src="<?= IMG ?>stores_badges/google_fr.png" /></a>
        </nav>
        <form action="" method="post" class="form-inline mb-4">
            <input type="email" name="email" id="email" required placeholder="Rester informé par e-mail" class="form-control mr-sm-2 mb-2" />
            <button type="submit" class="btn btn-outline-primary mb-2 newsletter-subscribe">
                <i class="fa fa-paper-plane"></i>
                Envoyer
            </button>
        </form>
    </div>
    <div class="about_mockup col-md-6 mt-5 mt-lg-0">
        <div class="mockup_container float-none float-md-right mr-md-5">
            <div class="mockup_content">
            <?php if (IS_SAFARI): ?>
                <img src="<?= IMG ?>home-mockup-fr.png" />
            <?php else: ?>
                <video autoplay loop muted id="mockup_video">
                    <source src="<?= ASSETS ?>demo.mp4" type="video/mp4" />
                </video>
                <img src="<?= IMG ?>home-mockup.png" />
            <?php endif ?>
            </div>
        </div>
    </div>
    <div class="chevron d-none d-md-block">
        <a href="<?= WEBROOT ?>#solution" class="chevron-link"><i class="fa fa-chevron-down"></i></a>
    </div>
</section>
<section id="solution">
    <div class="margin"></div>
    <a target="_blank" rel="noopener" href="https://www.youtube.com/watch?v=Z54dVXdGLqk">
        <div class="overlay"></div>
        <iframe class="video"
                src="https://www.youtube-nocookie.com/embed/Z54dVXdGLqk?rel=0&autoplay=1&mute=1&showinfo=0&controls=0&loop=1&playlist=Z54dVXdGLqk&modestbranding=1&playsinline=1"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen=""
                frameborder="0">

        </iframe>
    </a>
</section>
<section id="engagements">
    <section class="engagement">
        <div class="picture">
            <img src="<?= IMG ?>pic01.jpg" />
        </div>
        <div class="text pt-lg-4">
            <h4>Connectez-vous partout</h4>
            <p>
                Dites adieu aux formulaires interminables, aux mots de passe, aux codes
                reçus par SMS. Profitez simplement des sites web et des applications que
                vous aimez en vous laissant porter par la simplicité de JustAuth.Me. Installez
                l'application, renseignez des informations basiques vous concernant, et
                connectez-vous sur tous les sites et applis de nos partenaires en un clin d'oeil.
            </p>
        </div>
    </section>
    <section class="engagement">
        <div class="picture">
            <img src="<?= IMG ?>pic02.jpg" />
        </div>
        <div class="text pt-lg-4">
            <h4>Plus de sécurité, aucun mot de passe</h4>
            <p>
                Les informations vous concernant sont stockées uniquement sur votre smartphone
                et c'est le système biométrique de celui-ci qui sert à vous
                authentifier: le concept même du mot de passe est oublié et vos informations
                ne sont pas centralisées sur nos serveurs. Les tentatives d'usurpation
                d'identié et ou de phishing sont ainsi réduites à néant.
            </p>
        </div>
    </section>
    <section class="engagement">
        <div class="picture">
            <img src="<?= IMG ?>pic03.jpg" />
        </div>
        <div class="text pt-lg-4">
            <h4>Contrôlez votre vie privée</h4>
            <p>
                Gérez les sites et applications sur lesquelles vous êtes inscrit, demandez
                une suppression de vos comptes et informations et créez plusieurs profils
                pour ne pas dévoiler votre véritable identité. Etant donné que nous ne
                stockons pas vos informations, nous ne savons pas qui vous êtes !
            </p>
        </div>
    </section>
    <section class="engagement">
        <div class="picture">
            <img src="<?= IMG ?>pic04.jpg" />
        </div>
        <div class="text pt-lg-4">
            <h4>Multi-plateformes, multi-usages</h4>
            <p>
                Que vous souhaitiez vous connecter depuis un ordinateur, une tablette ou un
                téléphone, que vous soyez un utilisateur d'iOS ou d'Android, de Windows,
                macOS ou Linux, JustAuthMe fonctionne de la même manière partout, en
                vous offrant toujours la meilleure expérience. Vous n'avez besoin que de
                votre smartphone. Rien de plus à posséder, installer ou configurer.
            </p>
        </div>
    </section>
    <section class="advantages text-center">
        <div class="advantage">
            <i class="fa fa-simplybuilt"></i>
            Simple & rapide
        </div>
        <div class="advantage">
            <i class="fa fa-lock"></i>
            Fiable et sécurisé
        </div>
        <div class="advantage">
            <i class="fa fa-cloud"></i>
            Disponible partout
        </div>
        <div class="advantage">
            <i class="fa fa-user-secret"></i>
            Vie privée préservée
        </div>
        <div class="advantage">
            <i class="fa fa-flag"></i>
            Made in France
        </div>
    </section>
</section>
<section id="pricing">
    <div class="content">
        <h2 class="h1">Nos tarifs</h2>
        <div class="price-plans mt-3 mt-md-5 d-flex justify-content-center flex-wrap">
            <div class="price-plan">
                <i class="icon fa fa-check-circle"></i>
                <div class="name">Standard</div>
                <div class="price">
                    0<span class="small">,00</span><sup>&euro;</sup><span class="small">/Mois</span>
                </div>
                <div class="badge badge-success">Gratuit pour toujours</div>
                <ul class="features">
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Une identité
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Connexions illimitées
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Services illimités
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Assistance 5j/7 7h/j
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        Sauvegarde cloud sécurisée
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        Partage de comptes
                    </li>
                </ul>
                <a href="<?= WEBROOT ?>#about" class="btn btn-outline-success">Choisir ce tarif</a>
            </div>
            <div class="price-plan disabled">
                <i class="icon fa fa-paper-plane"></i>
                <div class="name">Premium</div>
                <div class="price">
                    --<span class="small">,--</span><sup>&euro;</sup><span class="small">/Mois</span>
                </div>
                <div class="badge badge-danger">Prochainement</div>
                <ul class="features">
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Jusqu'à 10 identités
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Connexions illimitées
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Services illimités
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Assistance 24/7
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Sauvegarde cloud sécurisée
                    </li>
                    <li class="included">
                        <i class="fa fa-check"></i>
                        Partage de comptes
                    </li>
                </ul>
                <button disabled class="btn btn-outline-secondary">Choisir ce tarif</button>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <h1>L'équipe du projet</h1>
    <div class="content">
        <div>
            <div class="member">
                <img src="<?= IMG ?>team_peter.jpg" />
                <div class="name">Peter Cauty</div>
                <div class="status">Président</div>
                <div class="role">
                    Développeur Fullstack
                </div>
            </div>
            <div class="member">
                <img src="<?= IMG ?>team_jeremy.jpg" />
                <div class="name">Jérémy Pingeon</div>
                <div class="status">Directeur Général</div>
                <div class="role">
                    Développeur Web
                </div>
            </div>
        </div>
        <div>
            <div class="member">
                <img src="<?= IMG ?>team_antoine.jpg" />
                <div class="name">Antoine Fogel</div>
                <div class="role">
                    Marketing<br />
                    Communication
                </div>
            </div>
            <div class="member">
                <img src="<?= IMG ?>team_kassandra.jpg" />
                <div class="name">Kassandra de Clercq</div>
                <div class="role">
                    Marketing<br />
                    Relation clients B2B
                </div>
            </div>
            <div class="member">
                <img src="<?= IMG ?>team_alessandro.jpg" />
                <div class="name">Alessandro Taccola</div>
                <div class="role">
                    DevOps<br />
                    Développeur mobile
                </div>
            </div>
            <div class="member">
                <img src="<?= IMG ?>team_victor.jpg"  />
                <div class="name">Victor Labro</div>
                <div class="role">
                    Réalisateur<br />
                    Community manager
                </div>
            </div>
            <div class="member">
                <img src="<?= IMG ?>team_charley.jpg" />
                <div class="name">Charley Sedeau</div>
                <div class="role">
                    Administrateur<br />
                    systèmes & réseaux
                </div>
            </div>
        </div>
    </div>
</section>