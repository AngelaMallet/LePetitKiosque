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
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8" />
    <title>CauxLibri</title>
</head>

<body>

    <header>
     
    </header>
    <!--Fin du header et navbar -->
    <div class="container">
        <div class="row">
    <div class="row">
    <div class=" col s12 l12">
        <h2 class="card-panel red accent-1 white-text text-white"><?= 'Vous êtes enregistré !'; ?></h2>
        <p>Vous n'avez pas encore les droits pour naviguer sur le site.</p>
        <p>Merci de vous rendre à la mairie avec une pièce d'identité pour finaliser votre inscription.</p>
    </div>
</div>
<div class="row">
    <div class=" col s12 l12">
        <img  width="200" height="200" src="../LePetitKiosque/assets/merciColibri.png">
    </div>
</div>
<div class=" col s12 l12">
    <a href="index.php" id="registrationBtn" class=" waves-effect waves-red btn-large blue-grey lighten-2 modal-trigger s12 m6">Retour</a>
    
</div>
</div>
    </div>

  

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</body>