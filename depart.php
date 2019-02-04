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
        <title>départ</title>
    </head>
        
    <body>
        <?php include 'nav.html'; ?>
        <div class="container center-align">
            <div class="whiteSapce50"></div>
            <nav class="dot">
                <div class="nav-wrapper red acent-1">
                    <div class="col s12">
                        <a href="date.php" class="breadcrumb">DATE</a>
                        <a href="services.php" class="breadcrumb">SERVICES</a>
                        <a href="depart.php" class="breadcrumb white-text">DÉPART</a>
                        <a href="arrivee.php" class="breadcrumb">ARRIVÉE</a>
                        <a></a>
                    </div>
                </div>
            </nav>
            <div class="whiteSapce50"></div>
            <div class="row">
                <div class="col s12 m6 l6 left-align">
                    <form method="POST" action="">
                        <p>
                            <label>
                                <input class="with-gap" name="startingPoint" value="mairie" type="radio"  />
                                <span>Sandouville Mairie</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="startingPoint" value="vachat" type="radio"  />
                                <span>Sandouville Vachat</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="startingPoint" value="carRouge" type="radio"  />
                                <span>Sandouville Car Rouge</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="startingPoint" value="leBas" type="radio"  />
                                <span>Sandouville Le bas</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="startingPoint" value="autreFrom" type="radio"  />
                                <span>Autre (adresse)</span>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Adresse :</label>
                            </label>
                        </p>
                    </form>
                <?php include 'actionBtn.html'; ?>
                    <div class="whiteSapce100"></div>
                </div>
                <div class="hide-on-small-only">
                    <div class="col s12 m6 center-align">
                        <img  width="500" height="400" src="../LePetitKiosque/assets/from.png">
                    </div>
                </div>
            </div>
            <div class="modal-footer center-align">
                <a href="index.php" class="modal-close waves-effect waves-light btn-large red accent-1">Annuler</a>
                <a href="arrivee.php" class="modal-close waves-effect waves-light btn-large red accent-1">SUVANT</a>
            </div>
        </div>
    </body>   
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</html>