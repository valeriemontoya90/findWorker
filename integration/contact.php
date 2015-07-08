<!DOCTYPE html>
<html>
<head>
	<title>Findworker</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="assets/images/social/share_fb.png" />
    <meta property="og:image:type" content="image/png" />
    <meta name="description" content="">
    <link href="" rel="canonical" />
    <link rel="icon" type="image/png" href="assets/images/general/favicon.png" />
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
</head>
<body>
    <header class="header page-contact">
        <h1 class="logo">
            <a href="./">
                <img src="assets/images/general/logo.png" alt="FindWorker"/>
                <span>FindWorker</span>
            </a>
        </h1>

        <a href="#" class="disable menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <div class="menu">
            <a href="#" class="menu-close">
                <span></span>
                <span></span>
            </a>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="./">Accueil</a>
                </li>
                <li class="menu-item">
                    <a href="search.php">Rechercher un profil</a>
                </li>
                <li class="menu-item active">
                    <a href="./contact.php">Contact</a>
                </li>
                <li class="menu-item">
                    <a href="#">Déposer une offre</a>
                </li>
            </ul>
        </div>

        <div class="header-title">
            <h2>
                Contactez-nous
            </h2>
        </div>

    </header>

    <div class="contact">
        <div class="wrapper">
            <form>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="contact-last-name" placeholder="Nom">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="contact-first-name" placeholder="Prénom">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="email" class="form-control" id="contact-email" placeholder="E-mail*" required>
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="tel" class="form-control" id="contact-phone" placeholder="Phone">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <input type="text" class="form-control" id="contact-company" placeholder="Société">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="10" placeholder="Message.."></textarea>
                </div>
                <span class="col-xs-12 col-sm-4 contact-form-infos">* : Champs obligatoire</span>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="partners">
            <div class="partners-container">
                <h3>Nos partenaires</h3>

                <ul class="partners-list">
                    <li class="partners-item">
                        <a href="http://linkedin.com/" target="_blank">
                            <img src="assets/images/partners/linkedin.png" alt="LinkedIn"/>
                        </a>
                    </li>
                    <li class="partners-item">
                        <a href="http://github.com" target="_blank">
                            <img src="assets/images/partners/github.png" alt="Github"/>
                        </a>
                    </li>
                    <li class="partners-item">
                        <a href="http://dribbble.com/" target="_blank">
                            <img src="assets/images/partners/dribbble.png" alt="Dribbble"/>
                        </a>
                    </li>
                    <li class="partners-item">
                        <a href="http://behance.net" target="_blank">
                            <img src="assets/images/partners/behance.png" alt="Behance"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="footer-infos">
            <li class="footer-infos-item">
                Copyright 2015
            </li>
            <li class="footer-infos-item">
                <a href="#">
                    Mentions légales
                </a>
            </li>
            <li class="footer-infos-item">
                <a href="#">
                    Nous contacter
                </a>
            </li>
        </ul>
    </footer>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/TweenMax.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>