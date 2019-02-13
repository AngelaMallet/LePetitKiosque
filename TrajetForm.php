<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerAjoutServices.php';
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
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8" />
    <title>services</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container center-align">



            <div class="row articleTrajetForm">
            <nav class="dot" id="services">
                <div class="nav-wrapper red acent-1">
                    <div class="col s12">
                        <a href="#services" class="breadcrumb white-text">SERVICES</a>
                        <a href="#date" class="breadcrumb">DATE</a>
                        <a href="#depart" class="breadcrumb">DÉPART  &  ARRIVÉE</a>
                        <a></a>
                    </div>
                </div>
            </nav>
                <div class="col s12 m4 ">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="assets/covoiturage.png">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="assets/mapShop.png">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img src="assets/school.png">
                        </div>
                    </div>
                </div>

                <form method="POST" class="col s12 m12 l12" action="services.php">
                    <div class="row">
                        <div class="col s12 m4 l4 left-align">
                            <h2>Merci de choisir votre Service.</h2>
                            <p>Voici une liste des services les plus fréquents.</p>
                        </div>
                        <div class="col s12 m4 l4 left-align">
                            <h1><mark>SERVICES</mark></h1>
                            <p>
                                <label>
                                    <input class="with-gap" name="typesName" value="covoiturage" type="radio" />
                                    <span>Covoiturage</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="typesName" value="courses" type="radio" />
                                    <span>Courses</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="typesName" value="trajetScolaire" type="radio" />
                                    <span>Trajet scolaire</span>
                                </label>
                            </p>
                        </div>
                    </div>
            </div>

            <div class="row articleTrajetForm">
                    <nav class="dot" id="date">
                <div class="nav-wrapper red acent-1">
                    <div class="col s12">
                        <a href="#services" class="breadcrumb">SERVICES</a>
                        <a href="#date" class="breadcrumb white-text">DATE</a>
                        <a href="#depart" class="breadcrumb">DÉPART & ARRIVÉE</a>
                        <a></a>
                    </div>
                </div>
            </nav>
            <div class="row">
            <div class="col s12 m4 l4 left-align">
                            <h1><mark>DATES & HEURES</mark></h1>
                            <h2>Merci de choisir date & heure.</h2>
                            <p>Pour le départ de votre trajet</p>
                        </div>
                    <div class="hide-on-small-only">
                        <div class="col s12 m12 l12 center-align">
                            <img class="responsive-img" id="imgDate" src="../LePetitKiosque/assets/date.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="row input-field col s12 l6">
                            <input name="date" value ="<?=isset($date) ? $date : ''; ?>" id ="date" type = "date" class = "datepicker" />
                            <label>Veuillez choisir la date du trajet :</label>
                            <p class="NotValid" id="dateNameField"><?=isset($formError['date']) ? $formError['date'] : ''; ?></p>
                        </div>
                        <div class="row input-field col s12 l6">
                            <input name="hour" value = "<?=isset($hour) ? $hour : '07:30'; ?>" id="appt-time" type="time">
                            <label for="appt-time">Veuillez choisir l'heure du départ :</label>
                            <p class="NotValid" id="hourField"><?=isset($formError['hour']) ? $formError['hour'] : ''; ?></p>
                        </div>
                    </div>

                    <div class="row articleTrajetForm">
                    <nav class="dot" id="depart">
                <div class="nav-wrapper red acent-1">
                    <div class="col s12">
                        <a href="#services" class="breadcrumb">SERVICES</a>
                        <a href="#date" class="breadcrumb">DATE</a>
                        <a href="#depart" class="breadcrumb  white-text">DÉPART & ARRIVÉE</a>
                        <a></a>
                    </div>
                </div>
            </nav>
                        <div class="col s12 m4 l4 left-align">
                            <h2>Merci de choisir votre point de départ et votre point d'arrivée.</h2>
                            <p>Voici une liste des trajets les plus fréquents.</p>
                            <div class="hide-on-small-only">
                                <img class="responsive-img" id="imgDepart" src="../LePetitKiosque/assets/from.png">
                            </div>
                        </div>
                        <div class="col s12 m4 l4 left-align">
                            <h1><mark>DÉPART</mark></h1>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="mairie" type="radio" />
                                    <span>Sandouville Mairie</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="vachat" type="radio" />
                                    <span>Sandouville Vachat</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="carRouge" type="radio" />
                                    <span>Sandouville Car Rouge</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="leBas" type="radio" />
                                    <span>Sandouville Le bas</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="saintRomain" type="radio" />
                                    <span>Saint Romain de Colbosc</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="leHavre" type="radio" />
                                    <span>Le Havre</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="college" type="radio" />
                                    <span>Collège André Siegfried</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="startingPoint" value="lycee" type="radio" />
                                    <span>Lycée Guillaume Le Conquérant</span>
                                </label>
                            </p>

                        </div>
                        <div class="col s12 m4 l4 left-align">
                            <h1><mark>ARRIVÉE</mark></h1>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="saintRomain" type="radio" />
                                    <span>Saint Romain de Colbosc</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="leHavre" type="radio" />
                                    <span>Le Havre</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="college" type="radio" />
                                    <span>Collège André Siegfried</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="lycee" type="radio" />
                                    <span>Lycée Guillaume Le Conquérant</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="mairie" type="radio" />
                                    <span>Sandouville Mairie</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="vachat" type="radio" />
                                    <span>Sandouville Vachat</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="carRouge" type="radio" />
                                    <span>Sandouville Car Rouge</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="arrivalPoint" value="leBas" type="radio" />
                                    <span>Sandouville Le bas</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row input-field col s12 l12">
        <button class="waves-effect waves-light btn red acent-1" type="submit" name="submitFormTrajet">VALIDER<i class="material-icons right">send</i></button>
    </div>
  <a class="colorLink" href="index.php">Annuler</a>
     </form>

        <?php include 'actionBtn.php'; ?>
    </div>
</body>
<!-- fin du footer -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>

</html>