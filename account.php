<?php
    session_start(); // On démarre la session AVANT toute chose
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
        <link rel="stylesheet" href="assets/css/materialize.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>Compte client</title>
    </head>
    <body>
        <div id="accountContainer" class="container">
            <div class="row">
                <div class="container center-align">
                    <img id="logoHead2" src="assets/colibriB.png">
                    <div class="row">
                        <div class="card-content center-align">
                            <span class="card-title center-align">Espace abonné</span>
                            <h2 class="h2account">Bonjour !</h2><br />
                            <p><?= ($_SESSION['choix']) . ' ' . $_SESSION['name'] . ' ' . $_SESSION['lastName']; ?></p>
                            <p><?= ($_SESSION['email']); ?></p>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
<!--        <script ype="text/javascript" src="assets/js/js.js"></script>-->
        <script>
            $(document).ready(function () {
                // on initialise toutes les modals
                $('.modal').modal();

                // seul les modals error restent/vont s'ouvrir
                $('.modalError').modal('open');

                $('.fixed-action-btn').floatingActionButton();
            });
        </script>
    </body>
</html>

