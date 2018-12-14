<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/materialize.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Compte client</title>
    </head>
    <body>
        <div id="accountBackground" class="parallax-container valign-wrapper">
            <div class="row">
                <div class="container center-align">
                    <img id="logoHead2" src="assets/orange.png">
                    <div class="row">
                        <div class="card-content center-align">
                            <span class="card-title center-align">Espace abonné</span>
                            <h2 class="h2account">Vos informations :</h2><br />
                            <p><?= ($_SESSION['login']); ?></p>
                            <p><?= ($_SESSION['password']); ?></p>
                        </div>
                    </div>
                    <div class="modal-footer center-align">
                        <a href="user.php" class="modal-close waves-effect waves-light btn red accent-1 modal-trigger">Modifier</a>
                        <a href="index.php" class="modal-close waves-effect waves-light btn red accent-1 modal-trigger">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
