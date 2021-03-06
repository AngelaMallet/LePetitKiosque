<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerUserLogin.php';
if (!isset($_SESSION)) {
    header('location : 404.php');
    exit();
}
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
        <link rel="icon" href="assets/logoOnglet.png" />

        <title>CauxLibri</title>
    </head>
    <body>
        
        
        <header>
            <!-- header et navbar -->
            <?php include 'nav.php'; ?>
        </header>
            
            
            
        <?php if ($logSucces) {
    ?>
        <div class="row">
            <div class=" col s12 l12 center-align">
                <h2 class="errorMessageUserLogin"><mark><?= 'Pas si vite ;)'; ?></mark><br><br><mark><?= 'Votre mot de passe ou votre email semble erroné.'; ?></mark></h2>
            </div>
  <?php
}
        ?>
      
        
        <div class="container center-align">
        <h1 class="formTitle2 center-align red-text text-red accent-1">Merci de vous identifier :</h1>
            <div class="row">
            <div class="col s12 m12 l12">
                               <img class="responsive-img" src="assets/valide.png" width="200" height="200">
                               </div>
                <form id="formUser" method="POST" class="col s12 offset-l2 l8 offset-l2 forecast3" action="userLogin.php" >
                    <div class="row input-field col s12 l6">
                        <input name="email" value = "" id = "email" type="text" class = "active" />
                        <label for="email">Email</label>
                        <p class="NotValid"><?= isset($formError['email']) ? $formError['email'] : ''; ?></p>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input name="password" value="" id="password" type="password" class="active">
                            <label for="password">Mot de passe</label>
                            <p class="
                               NotValid"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                        </div>
                    </div>
                        
                    <div class="row input-field col s12 l12">
                        <button class="modal-close waves-effect waves-light btn red accent-1 modal-trigger" type="submit" name="logBtn">Valider</button>
                    </div>
                    <div class="row">
                    <p><a href="index.php" class="grey-text">Annuler</a></p>
                </div>
                </form>
                
            </div>
            <?php include 'actionBtn.php'; ?>
        </div>
     
        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/js.js"></script>
    </body>