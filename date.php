<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerAjoutDate.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Import Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
            
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>Date</title>
    </head>
    <!-- header et navbar -->
    <boby>
        <?php include 'nav.php'; ?>
        <div class="container center-align">
            <nav class="dot hide-on-med-and-down">
                <div class="nav-wrapper red acent-1 ">
                    <div class="col s12">
                        <a href="date.php" class="breadcrumb white-text">DATE</a>
                        <a href="services.php" class="breadcrumb">SERVICES</a>
                        <a href="depart.php" class="breadcrumb">DÉPART</a>
                        <a href="arrivee.php" class="breadcrumb">ARRIVÉE</a>
                        <a></a>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="hide-on-small-only">
                        <div class="col s12 m12 l12 center-align">
                            <h1 id="projetH1">DATE ET HEURE DE DÉPART<br>DU TRAJET CAUX<i>libri</i> ?</h1>
                            <img class="responsive-img" id="imgDate" width="300" height="200" src="../LePetitKiosque/assets/date.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    
                    <form  method="POST" class = "col s12 m12 l12" action="date.php">
                        <div class="row input-field col s12 l6">
                            <input name="date" value ="<?= isset($date) ? $date : ''; ?>" id ="date" type = "date" class = "datepicker" /> 
                            <label>Veuillez choisir la date du trajet :</label>       
                            <p class="NotValid" id="dateNameField"><?= isset($formError['date']) ? $formError['date'] : '' ?></p>
                        </div>
                        <div class="row input-field col s12 l6">
                            <input name="hour" value = "<?= isset($hour) ? $hour : '07:30'; ?>" id="appt-time" type="time">
                            <label for="appt-time">Veuillez choisir l'heure du départ :</label>
                            <p class="NotValid" id="hourField"><?= isset($formError['hour']) ? $formError['hour'] : '' ?></p>
                        </div></form>
                </div>
            <?php include 'actionBtn.php'; ?>
                
                <div class="row col s12 l12">
                    <a href="date.php" class="waves-effect waves-red btn-large red accent-1">Précédent</a>
                    <button class="waves-effect waves-red btn-large red accent-1" type="submit" name="submitFormDate">Suivant</button>
                </div>
                <a href="index.php" class="blue-grey-text">Retour</a>
            </div>
        </div>
        
    </boby>
        
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</html>