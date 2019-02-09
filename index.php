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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="animate.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>CauxLibri</title>
    </head>
    <body>
        
        <header>
            <!-- header et navbar -->
            <?php include 'nav.php'; ?>
        </header>
        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 center-align blue-grey-text text-blue-grey darken-3 forecast">
                    <h1>CAUX<i>libri</i></h1>
                        
                    <div class="row">
                        <div class="col s12 l12">
                            <img id="imgHead" class="responsive-img hide-on-small-only" src="assets/navigationBis.png" alt="image haut de page" />
                        </div>
                    </div>
                    <div class="row">
                        <!-- Modal Trigger -->
                        <a href="#modal1" id="registrationBtn" class=" waves-effect waves-grey btn-large blue-grey lighten-2 modal-trigger s12 m6">Inscription</a>
                    </div>
                        
                    <div class="col s12 l12 blue-grey-text text-blue-grey darken-3" id="presentationText">
                        <p>Nous pouvons tous rendre service d'une manière ou d'une autre.
                            CAUX<i>libri</i> souhaite mettre les personnes en contact pour mutualiser les déplacements et
                            rompre l'isolement des personnes non motorisées.
                            Il est possible par exemple de prendre des voisins dans sa voiture lors des trajets quotidiens.
                            D'accompagner d'autres enfants du même village quand nous allons chercher notre enfant au collège ou lycée.
                            Et pourquoi ne pas prendre une personne agée avec nous pour nous rendre dans le village voisin faire ses courses?<strong>Et vous comment pouvez-vous devenir CAUX<i>libri</i> ?</strong></p>
                    </div>
                </div>
            </div>
        
        
        <div class="row">
            <div class="col s12 m12 center-align blue-grey-text text-blue-grey darken-3">
                <h4><mark>Pour offrir une place, deux options s'offrent à vous :</mark></h4>
            </div>
           
            <div class="modal-content center-align dayforecast">
                
                <?php include 'cards.php'; ?>
            </div>
            
            <!-- Modal Structure inscription-->
            <div id="modal1" class="modal <?= isset($modalError) ? 'modalError' : ''; ?> <?= $addSuccess ? 'modalError' : ''; ?> modal-fixed-footer">
                <div class="modal-content center-align">
                    <div class="col s12 l12 right-align">
                        <a id="closeModal" href="#!" class="modal-action modal-close waves-effect waves-red btn-tiny"><i class="material-icons">cancel</i></a>
                    </div>
                    
                    <?php include 'form.php'; ?>
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