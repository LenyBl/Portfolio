<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/script.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <link rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="/img/portfolio.png">
    <title>Portfolio |
        <?= $title ?>
    </title>
</head>


<body>
<header>
    <nav class="nav-extended center z-depth-4 grey lighten-4">
        <div class="nav-wrapper">
                <span class="nav-title black-text text-darken-2" style="margin: 0 !important; padding: 0;"><a
                            href="<?= route_to('accueil') ?> " class="black-text text-darken-2"
                            style="margin: 0;">Portfolio</a></span>
            <span class="black-text text-darken-2" style="margin: 0 ; padding: 0;">Blee Leny</span>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                        class="material-icons black-text">reorder</i></a>
        </div>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="<?= route_to('pages_bts_slam') ?>" class="blue-text text-darken-2">SLAM</a></li>
            <li class="divider"></li>
            <li><a href="<?= route_to('pages_bts_sisr') ?>" class="blue-text text-darken-2">SISR</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper light-blue darken-3">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="<?= route_to('accueil') ?>">Profil</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">BTS SIO<i
                                    class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="<?= route_to('veille') ?>">VEILLE TECHNOLOGIQUE</a></li>
                    <li><a href="<?= route_to('projets') ?>">PROJETS</a></li>
                    <li><a href="<?= route_to('contact') ?>">CONTACT</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="<?= route_to('accueil') ?>">Profil</a></li>
            <li><a href="<?= route_to('pages_bts') ?>">BTS SIO</a></li>
            <li><a href="<?= route_to('veille') ?>">VEILLE TECHNOLOGIQUE</a></li>
            <li><a href="<?= route_to('projets') ?>">PROJETS</a></li>
            <hr>
            <li><a href="<?= route_to('contact') ?>" class="black-text text-darken-2">Contact</a></li>
        </ul>


</header>

<main>

    <?= $this->renderSection('content') ?>

</main>


<footer class="page-footer grey lighten-4 z-depth-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="black-text text-darken-2">Footer Content</h5>
                <p class="black-text text-darken-2">You can use rows and columns here to organize your footer
                    content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="black-text text-darken-2">Links</h5>
                <ul>
                    <li><a class="black-text text-darken-2" href="#!">Link 1</a><i
                                class="material-icons black-text"></i></li>
                    <li><a class="black-text text-darken-2" href="#!">Link 2</a></li>
                    <li><a class="black-text text-darken-2" href="#!">Link 3</a></li>
                    <li><a class="black-text text-darken-2" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright light-blue darken-4">
        <div class="container white-text">
            © 2024 Blee Leny

        </div>
    </div>
</footer>


</body>

</html>