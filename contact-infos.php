<?php
require_once 'controllers/controllerContactTrajets.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!--Import Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8" />

    <title>Vos informations </title>
</head>

<body class="indexBackground">
    <header>
        <!-- header et navbar -->
        <?php include 'nav.php'; ?>
    </header>
    <div class="container hide-on-small-only">
        <div class="row blue-grey-text text-blue-grey darken-3">
            <div class="col s12 m12 l12" id="divContactInfos" >
               <div class="card-content"  id="contactInfosCard">
                            <div class="row center-align">
                                <img class="responsive-img" src="assets/contact.png" width="300" height="00">
                            </div>
                            <div class="row center-align">
                                <h1 class="header soulignerSansJaune">Coordonnées du Colibri</h1>
                                <p id="baselineContact"><i>pour finaliser votre trajet</i></p>
                            </div>
                            <form id="form" method="POST" class="col s12 m12 offset-l2 l8 offset-l2"
                                action="accountuserModif.php">

                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">account_circle</i>Prénom</label>
                                    <input name="firstName" disabled value="<?=$ArrayContact->firstName; ?>"
                                        id="firstName" type="text" class="active" />
                                </div>
                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">face</i>Nom</label>
                                    <input name="lastName" disabled value="<?=$ArrayContact->lastName; ?>" id="lastName"
                                        type="text" class="active" />

                                </div>
                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">mail</i>Adresse mail</label>
                                    <input name="email" disabled value="<?=$ArrayContact->email; ?>" id="email"
                                        type="email" class="active">

                                </div>
                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">local_phone</i>Téléphone</label>
                                    <input name="tel" disabled value="<?=$ArrayContact->tel; ?>" id="tel" type="tel"
                                        maxlength="10" size="10" class="active">
                                </div>
                                <div class="row col s12 l12 center-align">
                                    <a class="blue-grey-text text-blue-grey darken-3"
                                        href="liste-trajetsBis.php">RETOUR</a>
                                    <!-- ... <p><a id="linkForm" href="index.php">Vous êtes déjà inscrit?</a></p>-->
                                </div>
                            </form>

                        </div>
                    
               
            </div>
        </div>
    </div>


    <div class="container hide-on-med-and-up">
        <div class="row blue-grey-text text-blue-grey darken-3">
            <div class="col s12 m12 l12">
               <div class="card-content">
                            <div class="row center-align">
                                <img class="responsive-img" src="assets/contact.png" width="300" height="00">
                            </div>
                            <div class="row center-align">
                                <h1 class="header soulignerSansJaune">Coordonnées du Colibri</h1>
                                <p id="baselineContact"><i>pour finaliser votre trajet</i></p>
                            </div>
                            <form id="form" method="POST" class="col s12 m12 offset-l2 l8 offset-l2"
                                action="accountuserModif.php">

                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">account_circle</i>Prénom</label>
                                    <input name="firstName" disabled value="<?=$ArrayContact->firstName; ?>"
                                        id="firstName" type="text" class="active" />
                                </div>
                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">face</i>Nom</label>
                                    <input name="lastName" disabled value="<?=$ArrayContact->lastName; ?>" id="lastName"
                                        type="text" class="active" />

                                </div>
                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">mail</i>Adresse mail</label>
                                    <input name="email" disabled value="<?=$ArrayContact->email; ?>" id="email"
                                        type="email" class="active">

                                </div>
                                <div class="row input-field col s12 l8 offset-l2">
                                    <label><i class="tiny material-icons">local_phone</i>Téléphone</label>
                                    <input name="tel" disabled value="<?=$ArrayContact->tel; ?>" id="tel" type="tel"
                                        maxlength="10" size="10" class="active">
                                </div>
                                <div class="row col s12 l12 center-align">
                                    <a class="blue-grey-text text-blue-grey darken-3"
                                        href="liste-trajetsBis.php">RETOUR</a>
                                    <!-- ... <p><a id="linkForm" href="index.php">Vous êtes déjà inscrit?</a></p>-->
                                </div>
                            </form>

                        </div>
                    
               
            </div>
        </div>
    </div>

    <?php include 'actionBtn.php'; ?>

    <div class="whiteSapce200"></div>
    <!-- debut du footer -->
    <?php include 'footer.php'; ?>
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</body>

</html>