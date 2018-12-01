<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
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
        <div id="accountBackground"class="parallax-container valign-wrapper">
            <div class="row">
                <div class="container center-align">
                    <img id="logoHead2" src="assets/orange.png">
                    <div class="row">
                        <div class="card-content center-align">
                            <span class="card-title center-align">Espace abonné</span>
                            <p>
                            <h2 class="h2account">Bonjour !</h2><br />
                                Votre nom :  <?php echo $_POST['name']; ?> <br />Votre prénom :  <?php echo $_POST['lastName']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer center-align">
                        <a href="form.php" class="modal-close waves-effect waves-light btn orange darken-1">Modifier</a>
                        <a href="index.php" class="modal-close waves-effect waves-light btn orange darken-1">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>