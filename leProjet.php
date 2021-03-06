<?php
require_once 'controllers/controllerAjoutUsers.php';
session_start(); // On démarre la session AVANT toute chose
//require_once 'controllers/controllerUserInfo.php';
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
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8" />
    <link rel="icon" href="assets/logoOnglet.png" />
    <title>CauxLibri</title>
</head>

<body>

    <header>
        <!-- header et navbar -->
        <?php include 'nav.php'; ?>
    </header>
    <!--Fin du header et navbar -->
    <div id="projetFrame" class="container center-align">
            <div class="row">
                <div class="col s12 m6 left-align blue-grey-text text-blue-grey darken-3">
                    <h1 id="projetH1">La légende du colibri</h1>
                    <div class="col s12 m8 left-align">
                        <blockquote class="projetText blue-grey-text text-blue-grey darken-3">“Un jour, dit la légende, il y eut un immense incendie de forêt. Tous les animaux terrifiés, atterrés, observaient impuissants le désastre. Seul le petit colibri s’activait, allant chercher quelques gouttes avec son bec pour les jeter sur le feu. Après un moment, le tatou, agacé par cette agitation dérisoire, lui dit : « Colibri ! Tu n’es pas fou ? Ce n’est pas avec ces gouttes d’eau que tu vas éteindre le feu ! »</blockquote>
                        <h6 class="center-align">Et le colibri lui répondit :</h6>
                        <h6 class="center-align">« <i>Je le sais, mais je fais ma part.</i> »”</h6>
                    </div>
                </div>
                <div class="hide-on-small-only">
                    <div class="col s12 m6 center-align">
                        <img  width="500" height="400" src="../LePetitKiosque/assets/chat2.png">
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <p class="projetText blue-grey-text text-blue-grey darken-3">
                        <b>Tout est parti d’un constat, j’habite un village près du Havre dépourvu de transports en commun :</b><br>
                        - Plusieurs parents du même village viennent chercher leurs enfants au collège.<br>
                        - Au quotidien, nous sommes nombreux à nous déplacer vers Le Havre.<br>
                        - Les médecins et les pharmacies sont situés dans le village voisin.<br>
                        La problématique est « comment mutualiser nos déplacements ? »<br>
                        Offrir une place dans son véhicule n’est que du bon sens pour les sorties d’écoles et les déplacements quotidiens. Il suffit de faire le choix du partage et d’en être informé.
                        Il faut aussi prendre en compte que l'isolement est inévitable pour une personne non motorisée dans un village. Lui donner la possibilité de se déplacer de nouveau rompt aussitôt cette situation subie.
                        C’est en réponse à ce constat que le site CAUXlibri est né.
                        Une fois inscrit sur le site, il sera possible d’offrir via la saisie d’un formulaire, un trajet (ponctuel ou quotidien).
                        Le site a pour but de mettre en relation les utilisateurs afin de convenir des détails et de valider le trajet.
                        CAUXlibri fonctionne sur la proximité et la solidarité entre habitants d’un même village.
                        Les trajets sont offerts par les personnes qui les proposent. C’est une démarche altruiste où chacun peut être un petit colibri.</p>
                </div>
                <div class="row">
                <div class="col s12 l12 center-align">
                    <a href="index.php?openRegistration" class="modal-close btn-large blue-grey lighten-2" id="btnInscriptionProjet">Inscription</a>
                    
                </div>
            </div>
            <div class="row">
                <div class="col s12 l12 center-align">
                <a class="blue-grey-text text-blue-grey darken-3" href="index.php">Retour</a>
                </div>
            </div>
            </div>
</div>

    <?php include 'actionBtn.php'; ?>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</body>