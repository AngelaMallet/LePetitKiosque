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
        <div id="accountBackground"class="parallax-container valign-wrapper">
            <div class="row">
                <div class="container center-align">
                    <img id="logoHead2" src="assets/orange.png">
                    <div class="row">
                        <div class="card-content center-align">
                            <span class="card-title center-align">Espace abonné</span>
                            <h2 class="h2account">Bonjour !</h2><br />
                            <p><?= ($_POST['choix']) . ' ' . $_POST['name'] . ' ' . $_POST['lastName']; ?></p>
                            <p><?= $_POST['email']; ?></p>
                        </div>
                   </div>
                    <div class="modal-footer center-align">
                        <a href="#modal3" class="modal-close waves-effect waves-light btn orange darken-1 modal-trigger">Modifier</a>
                        <a href="index.php " class="modal-close waves-effect waves-light btn orange darken-1">Retour</a>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal3" class="modal modal-fixed-footer">
                        <div class="modal-content center-align">
                            <?php include 'form.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/js.js"></script>
    </body>
</html>
