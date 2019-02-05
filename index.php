<?php
require_once 'controllers/controllerAjoutUsers.php';
    
?>  
<?php if ($addSuccess) { ?>
<h2><?= 'Vous êtes enregistré !' ?></h2>
                            <?php } ?>
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
            <?php include 'nav.html'; ?>
        </header>
        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 center-align blue-grey-text text-blue-grey darken-3">
                    <h1>CAUX<i>libri</i></h1>
                    <img id="imgHead" class="responsive-img hide-on-small-only" src="assets/navigationBis.png" alt="image haut de page" />
                    <div class="whiteSapce50"></div>
                    <!-- Modal Trigger -->
                    <a href="#modal1" id="registrationBtn" class="modal-close waves-effect waves-red btn-large red accent-1 modal-trigger s12 m6">Inscription</a>
                    <!-- Modal Trigger -->
                    <p>Nous pouvons tous rendre service d'une manière ou d'une autre.
                        CAUX<i>libri</i> souhaite mettre les personnes en contact pour mutualiser les déplacements et
                        rompre l'isolement des personnes non motorisées.
                        Il est possible par exemple de prendre des voisins dans sa voiture lors des trajets quotidiens.
                        D'accompagner d'autres enfants du même village quand nous allons chercher notre enfant au collège ou lycée.
                        Et pourquoi ne pas prendre une personne agée avec nous pour nous rendre dans le village voisin faire ses courses?<br/>
                        <strong>Et vous comment pouvez-vous devenir CAUX<i>libri</i> ?</strong></p>
                    
                </div>
            </div>
            <div id="offer" class="whiteSapce100"></div>
            <div class="row">
                <div class="col s12 m12 center-align blue-grey-text text-blue-grey darken-3">
                    <h4>Pour offrir une place, deux options s'offrent à vous :</h4>
                </div>
            </div>
            <?php 
            $mail = 'angelamallet@gmail.com';
            $mail = explode('@',$mail);
            echo 'La partie gauche du mail est : ' .$mail[0]; ?> 
            <br/>
             <?php
             echo 'La partie gauche du mail est : ' .$mail[1];
            ?>
            
            <div class="modal-content center-align">
                <?php include 'cards.php'; ?>
            </div>
            
            <!-- Modal Structure inscription-->
            <div id="modal1" class="modal <?= $modalError ? 'modalError' : ''; ?> modal-fixed-footer">
                <div class="modal-content center-align">
                    <?php include 'form.php'; ?>
                </div>
            </div>

        </div>
        <?php include 'actionBtn.html'; ?>
        
        <div class="whiteSapce200"></div>
        <!-- debut du footer -->
         <?php include 'footer.html'; ?>
        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/js.js"></script>
    </body>
</html>