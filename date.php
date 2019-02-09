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
        <title>Date</title>
    </head>
    <!-- header et navbar -->
    <boby>
        <?php include 'nav.php'; ?>
        <div id="projetFrame" class="container center-align">
           <nav class="dot hide-on-med-and-down">
                <div class="nav-wrapper red acent-1 ">
                    <div class="col s12">
                        <a href="date.php" class="breadcrumb white-text">DATE</a>
                        <a href="services.php" class="breadcrumb">SERVICES</a>
                        <a href="depart.php" class="breadcrumb">DÉPART</a>
                        <a href="arrivee.php" class="breadcrumb">ARRIVÉE</a>
                        <a></a>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col s12 m6 left-align">
                    <h1 id="projetH1">DATE ET HEURE DE DÉPART<br>DU TRAJET CAUX<i>libri</i> ?</h1>
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <label>Veuillez choisir la date du trajet :</label>              
                            <input type = "date" name="date" class = "datepicker" /> 
                        </div>
                    </div>
                    <div class = "row">
                        <form class = "col s12 m12 l12">
                            <div class = "row">  
                                <div class="col s12 m6 l6">
                                    <label for="appt-time">Veuillez choisir l'heure du départ :</label>
                                    <input id="appt-time" type="time" name="hour" value="07:30">
                                </div>
                            </div>     
                        </form>       
                    </div>
                </div>
                <div class="hide-on-small-only">
                    <div class="col s12 m6 center-align">
                        <img class="responsive-img" width="500" height="400" src="../LePetitKiosque/assets/date.png">
                    </div>
                </div>
            </div>
            <?php include 'actionBtn.php'; ?>
            <div class="whiteSapce100"></div>
            <div class="modal-footer center-align">
                <a href="index.php" class="modal-close waves-effect waves-light btn-large red accent-1">Annuler</a>
                <div class="whiteSapce50 hide-on-med-and-up"></div>
                <a href="depart.php" class="modal-close waves-effect waves-light btn-large red accent-1">SUVANT</a>
            </div>
        </div>
    </boby>

    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</html>