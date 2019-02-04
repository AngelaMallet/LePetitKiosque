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
        <title>CauxLibri</title>
    </head>

    <body>
        <!-- header et navbar -->
        <?php include 'nav.html'; ?>


        <div id="offerForm" class="container center-align">
            <div class="row">
                <div class="col s12 m6 left-align">
                    <h1 id="projetH1">Offrir un trajet CAUX<i>libri</i> ?</h1>
                    <div class="col s12 m8 left-align">
                        <p>Pour offrir une ou plusieurs place de façon ponctuelle ou quotidienne, il vous suffit de remplir le formulaire ci-dessous.</p>
                    </div>
                </div>
                <div class="hide-on-small-only">
                    <div class="col s12 m6 center-align">
                        <img  width="500" height="400" src="../LePetitKiosque/assets/offer.png">
                    </div>
                </div>

            </div>
            <nav class="dot">
                <div class="nav-wrapper red acent-1">
                    <div class="col s12">
                        <a href="days.php" class="breadcrumb">DATE</a>
                        <a href="services.php" class="breadcrumb">SERVICES</a>
                        <a href="depart.php" class="breadcrumb">DÉPART</a>
                        <a href="arrivee.php" class="breadcrumb">ARRIVÉE</a>
                        <a></a>
                    </div>
                </div>
            </nav>
            <?php include 'actionBtn.html'; ?>
            <div class="whiteSapce100"></div>
            <div class="modal-footer center-align">
                <a href="#" class="modal-close waves-effect waves-red btn-large red accent-1">Modifier</a>
                <a href="index.php" class="modal-close waves-effect waves-red btn-large red accent-1">Retour</a>
            </div>
        </div>
        <div class="whiteSapce200"></div>
           <!-- début du footer -->
    <?php include 'footer.html'; ?>
    <!-- fin du footer -->
    </body>   
 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</html>
