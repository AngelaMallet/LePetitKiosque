<?php include 'formController.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/materialize.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <title>CauxLibri</title>
    </head>
    <body>

        <header>
            <!-- header et navbar -->
            <div class="navbar-fixed grid-example row s12">
                <nav>
                    <div class="nav-wrapper white">
                        <ul class="right">
                            <li><a href="#home" class="orange-text text-orange accent-3">Accueil</a></li>
                            <li><a href="Billetterie.html" class="orange-text text-orange accent-3">Le projet</a></li>

                            <!-- Modal Trigger -->
                            <li><a href="#modal2" class="modal-close waves-effect waves-light btn orange accent-3 modal-trigger">Votre compte<i class="material-icons right">account_circle</i></a></li>
                        </ul>
                    </div>
                </nav>
                <div>
                </div>
        </header>
        <!--Fin du header et navbar -->
        <div class="parallax-container valign-wrapper">
            <div class="parallax"><img id="imageTop" src="assets/color.jpg"></div>
            <div class="row">
                <div class="container">
                    <div class="row  center-align">
                        <div class="col s12 m12 center-align amber-text text-lighten-5">
                            <img src="assets/colibriB.png" alt="logo" id="logoHead">
                            <h1 id="h1title">Caux<i>libri</i></h1>
                            <div id="presentation" class="col s12 m12 center-align hide-on-small-only">
                                <p>“Un jour, dit la légende, il y eut un immense incendie de forêt. Tous les animaux terrifiés, atterrés, observaient impuissants le désastre. Seul le petit colibri s’activait, allant chercher quelques gouttes avec son bec pour les jeter sur le feu. Après un moment, le tatou, agacé par cette agitation dérisoire, lui dit : « Colibri ! Tu n’es pas fou ? Ce n’est pas avec ces gouttes d’eau que tu vas éteindre le feu ! »</p>
                                <p class="center-align">Et le colibri lui répondit :« Je le sais, mais je fais ma part. »”</p>
                            </div>
                            <div id="presentationMini" class="col s12 m12 right-align hide-on-large-only">
                                <p>“Un jour, dit la légende, il y eut un immense incendie de forêt. Tous les animaux terrifiés, atterrés, observaient impuissants le désastre. Seul le petit colibri s’activait, allant chercher quelques gouttes avec son bec pour les jeter sur le feu. Après un moment, le tatou, agacé par cette agitation dérisoire, lui dit : « Colibri ! Tu n’es pas fou ? Ce n’est pas avec ces gouttes d’eau que tu vas éteindre le feu ! »</p>
                                <p class="center-align">Et le colibri lui répondit :« Je le sais, mais je fais ma part. »”</p>
                            </div>
                            <!-- Modal Trigger -->
                            <a href="#modal1" class="modal-close waves-effect waves-light btn-large red darken-1 modal-trigger">Inscription</a>
                        </div>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal modal-fixed-footer">
                            <div class="modal-content center-align">
                                <?php include 'form.php'; ?>
                            </div>
                        </div>
                        <div id="modal2" class="modal modal-fixed-footer">
                            <div class="modal-content center-align">
                                <?php include 'user.php'; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container center-align">
                <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
                <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
                <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
                <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
            </div>
        </div>
    </div>




    <!-- debut du footer -->
    <footer class="page-footer orange darken-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">CAUX<i>libri</i></h5>
                    <p class="grey-text text-lighten-4">Vous pouvez nous suivre sur les réseaux sociaux.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Informations</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">À propos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Compte client</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Billetterie</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <p>© 2018 Copyright CAUX<i>libri</i></p>
            </div>
        </div>
    </footer>
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/js.js"></script>
</body>
</html>
