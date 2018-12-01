<?php include 'formController.php';?>
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
        <title>Le petit kiosque</title>
    </head>
    <body>

        <header>
            <!-- header et navbar -->
            <div class="navbar-fixed grid-example row s12">
                <nav>
                    <div class="nav-wrapper white">
                        <ul class="right">
                            <li><a href="#home"class="orange-text text-orange accent-3">Accueil</a></li>
                            <li><a href="Billetterie.html"class="orange-text text-orange accent-3">Billetterie</a></li>
                            <li><a class="waves-effect waves-light btn orange accent-3 hide-on-small-only">Compte client<i class="material-icons right">account_circle</i></a></li>
                            <li><a class="btn-floating btn-large waves-effect waves-light orange accent-3 show-on-small hide-on-large-only"><i class="material-icons right">account_circle</i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--Fin du header et navbar -->
        <div class="parallax-container valign-wrapper">
            <div class="parallax"><img id="imageTop"src="assets/color.jpg"></div>
            <div class="row">
                <div class="container">
                    <div class="row  center-align">
                        <div class="col s12 m12  white-text center-align">
                            <h1 id="h1title">TutTut</h1>
                        </div>
                        <div id="presentation" class="col s12 m12  white-text center-align hide-on-small-only">
                            <p>Nous sommes heureux de vous rencontrer. Vous êtes ici chez vous. Pour acheter un billet ou pour ouvrir une billetterie, rien de plus simple. Il vous suffit de créer gratuitement un compte.</p>
                        </div>
                        <div id="presentationMini" class="col s12 m12  white-text center-align hide-on-large-only">
                            <p>Nous sommes heureux de vous rencontrer. Vous êtes ici chez vous. Pour acheter un billet ou pour ouvrir une billetterie, rien de plus simple. Il vous suffit de créer gratuitement un compte.</p>
                        </div>
                        <!-- Modal Trigger -->
                        <a href="#modal1" class="waves-effect waves-light btn-large red darken-1 modal-trigger">Billetterie</a>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content center-align">
                            <div class="col s12 m6">
                                <img src="assets" alt="logo" class="circle responsive-img .hide-on-small-only"> <!-- notice the "circle" class -->
                            </div>
                            <h1 class="formTitle">Formulaire d'inscription</h1>
                            <div class="container">
                                <div class="row">
                                    <i class="material-icons prefix">account_circle</i>
                                    <form id="form" method="POST" class="col s12 l12" action="" >
                                        <div class="row input-field col s12 l6">
                                            <input name="name" value = "" id = "name" type="text" class = "active" />
                                            <label for="name">Prénom</label>
                                            <p class="css" id="firstNameField"><?= isset($formError['name']) ? $formError['name'] : '' ?></p>
                                        </div>    
                                        <div class="row input-field col s12 l6">
                                            <input name="lastName" value = "" id = "lastName" type="text" class = "active" />
                                            <label for="lastName">Nom</label>
                                            <p class="css" id="lastNameField"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
                                        </div>
                                        <div id="birthday" class="row input-field col s12 l6">
                                            <div class="col s12 l6">
                                                <label>Date de naissance</label>              
                                                <input name="birthday" type="date" class="datepicker" />  
                                            </div>            
                                        </div>

                                        <div class="row input-field col s12 l6">
                                            <!--<input class="btn waves-effect waves-light amber lighten-5-text" type="submit" name="action" >-->
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer center-align">
                            <a href="#!" class="modal-close waves-effect waves-light btn orange darken-1">Acheter</a>
                            <a href="#!" class="modal-close waves-effect waves-light btn orange darken-1">Créer</a>
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




        <!-- debut du footer -->
        <footer class="page-footer orange darken-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Le Petit Kiosque</h5>
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
                    © 2018 Copyright Le Petit Kiosque
                    <a class="white-text text-orange darken-1"</a>
                </div>
            </div>
        </footer>
        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="assets/js/materialize.js"></script>
        <script src="assets/js/js.js"></script>
    </body>
</html>