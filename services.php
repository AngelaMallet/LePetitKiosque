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
        <title>services</title>
    </head>

    <body>
         <?php include 'nav.php'; ?>
        <div class="container center-align">
            <div class="whiteSapce50"></div>
            <div id="serviceRow" class="row center-align">
                <nav class="dot">
                    <div class="nav-wrapper red acent-1">
                        <div class="col s12">
                            <a href="date.php" class="breadcrumb">DATE</a>
                            <a href="services.php" class="breadcrumb white-text">SERVICES</a>
                            <a href="depart.php" class="breadcrumb">DÉPART</a>
                            <a href="arrivee.php" class="breadcrumb">ARRIVÉE</a>
                            <a></a>
                        </div>
                    </div>
                </nav>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/covoiturage.png">
                        </div>
                        <div class="card-content">
                            <a class="waves-effect waves-light btn-large red white-text accent-1" name="carpooling"><p>COVOITURAGE</p></a>

                        </div>			
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img id="shopImg" class="activator" src="assets/shop.png">
                        </div>
                        <div class="card-content">
                            <a class="waves-effect waves-light btn-large red white-text accent-1" name="shopping"><p>COURSES</p></a>

                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="assets/school.png">
                        </div>
                        <div class="card-content">
                            <a class="waves-effect waves-light btn-large red white-text accent-1" name="shopping"><p>TRAJET SCOLAIRE</p></a>
                        </div>				
                    </div>
                    <div class="whiteSapce100"></div>
                </div>
                <?php include 'actionBtn.php'; ?>
                <div class="modal-footer center-align">
                    <a href="index.php" class="modal-close waves-effect waves-light btn-large red accent-1">Retour</a>
                    <a href="offerForm.php" class="modal-close waves-effect waves-light btn-large red accent-1">Valider</a>
                </div>
            </div>
        </div>
    </body>   
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</html>