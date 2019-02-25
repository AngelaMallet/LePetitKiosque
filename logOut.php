<?php
session_start(); // On démarre la session AVANT toute chose
// On retire toute les variables de session via un 'session_unset'.
session_unset();
// On detruie la session via un 'session_destroy'.
session_destroy();
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
        
        <title>Vos informations </title>
    </head>
    <body class="indexBackground">
    <header>
        <!-- header et navbar -->
        <?php include 'nav.php'; ?>
    </header>
<div class="container center-align blue-grey-text text-blue-grey darken-3">
        <div class="col s12 m12 l12">
    <div class="card horizontal">
      <div class="card-stacked">
      <div class="col s12 m12 l12">
        <img src="assets/logout.png" alt="image logOut" height="150" width="150" class="rignt-align">
      </div>
        <div class="card-content">
        <h1 class="header">Vous êtes deconnecté</h1>
        </div>
        <div class="card-action">
          <a class="blue-grey-text text-blue-grey darken-3" href="index.php"><mark>Accueil</mark></a>
        </div>
      </div>
    </div>
  </div>

        <?php include 'actionBtn.php'; ?>
        
    
      
</div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/js.js"></script>
    </body>
</html>


