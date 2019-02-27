<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerAjoutTrajet.php';
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
        <link rel="icon" href="assets/logoOnglet.png" />
        <title>services</title>
    </head>

    <?php include 'nav.php'; ?>
    <!-- Message qui indique à l'utilisateur que son trajet est bien enregisté -->
    <?php if ($addSuccess) {
    ?>
        <body class="indexBackground">
            <div class="container center-align">
                <div class="row col s12 m12 l12">
                    <div class="card-content" id="successCardTrajetForm">
                        <div class="col s12 m12 l12">
                            <img class="responsive-img" src="assets/valide.png" width="200" height="200">
                        </div>
                        <div class=" col s12 l12 center-align">
                            <h2 class="errorMessageUserLogin"><mark><?='Merci ! Votre trajet est bien enregisté.'; ?></mark></h2>
                        </div>
                        <div class="row">
                            <a href="user-infosBis.php" class=" waves-effect waves-grey btn-small blue-grey lighten-2 modal-trigger s12 m6">Votre espace</a>
                        </div>
                    </div>
                    <?php
} else {
        ?>
                    <body>
                        <div class="container center-align">
                            <div class="col s12 m6 center-align">
                                <h1>Pour offrir une place dans votre voiture, il vous suffit de remplir le formulaire ci-dessous.</h1>
                                <p class="rotate"><mark>En trois étapes :</mark></p>
                            </div>
                            <div class="row articleTrajetForm">
                                <nav class="dot hide-on-small-only" id="services">
                                    <div class="nav-wrapper white">
                                        <div class="col s12">
                                            <a href="#services" class="breadcrumb grey-text text-grey lighten-1"><b>1.SERVICES</b></a>
                                            <a href="#date" class="breadcrumb grey-text text-grey lighten-1">2.DATE</a>
                                            <a href="#depart" class="breadcrumb grey-text text-grey lighten-1">3.DÉPART  &  ARRIVÉE</a>
                                            <a></a>
                                        </div>
                                    </div>
                                </nav>
                                <div class="col s12 m4 ">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="responsive-img" src="assets/covoiturage.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 hide-on-small-only">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img src="assets/mapShop.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 hide-on-small-only">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img src="assets/school.png">
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" class="col s12 m12 l12" action="">
                                    <div class="row">
                                        <div class="col s12 m4 l4 left-align">
                                            <h2>Merci de choisir votre Service.</h2>
                                            <p>Voici une liste des services les plus fréquents.</p>
                                        </div>
                                        <div class="col s6 m4 l4 left-align">
                                            <h1 class="souligner">SERVICES</h1>
                                            <?php
        // La fonction foreach ... as permet de récuperer le contenu du tableau
        foreach ($arrayGetService as $rowService) {
            ++$count; ?>
                                                <span>
                                                    <label>
                                                        <!-- $count == 1 initialise le radio bouton de départ à "covoiturage", le isset sert à savoir si l'id_types est envoyé et ensuite on fait le test &&
                                                         si le bouton radio selectionné ($_POST['id_types']) est égal à l'id_types du bouton radio donc en cas d'erreur de saisie (sur le formulaire) 
                                                         il me retourne le bouton selectionné par l'utilisateur  -->
                                                        <input class="with-gap" name="id_types" value="<?= $rowService->id_types; ?>" id ="id_types" type="radio" <?=($count == 1 or isset($_POST['id_types']) && $_POST['id_types'] == $rowService->id_types) ? 'checked' : ''; ?>/>
                                                        <span><?=$rowService->typesName; ?></span>
                                                    </label>
                                                </span>
                                                <?php
        } ?>
                                        </div>
                                    </div>
                            </div>
                            <div class="row articleTrajetForm hide-on-med-and-up">
                                <div class="row">
                                    <div class="col s12 m4 l4 left-align">
                                        <h1 class="souligner"> DATES & HEURES</h1>
                                        <h2>Merci de choisir date & heure.</h2>
                                        <p>Pour le départ de votre trajet</p>
                                    </div>
                                    <div>
                                        <img class="responsive-img" src="../LePetitKiosque/assets/date.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row input-field col s12 l6">
                                         <!-- On vérifie que l'on récupère la valeur de date et on l'affiche sinon le champs reste vide-->
                                         <input name="date" value="<?= (isset($_POST['date'])) ? $date : ''; ?>" id ="date" type = "date" class = "datepicker" />
                                        <label>Veuillez choisir la date du trajet :</label>
                                         <!-- S'il y a une erreur on indique le message d'erreur du controleur-->
                                        <p class="NotValid" id="dateNameField"><?=isset($formError['date']) ? $formError['date'] : ''; ?></p>
                                    </div>
                                    <div class="row input-field col s12 l6">
                                        <!-- On vérifie que l'on récupère la valeur de hour et on l'affiche sinon le champs reste vide-->
                                        <input name="hour" value="<?=(isset($_POST['hour'])) ? $hour : ''; ?>" id="appt-time" type="time">
                                        <label for="appt-time">Veuillez choisir l'heure du départ :</label>
                                        <!-- S'il y a une erreur on indique le message d'erreur du controleur-->
                                        <p class="NotValid" id="hourField"><?=isset($formError['hour']) ? $formError['hour'] : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row articleTrajetForm hide-on-small-only">
                                <nav class="dot" id="date">
                                    <div class="nav-wrapper white">
                                        <div class="col s12">
                                            <a href="#services" class="breadcrumb grey-text text-grey lighten-1">1.SERVICES</a>
                                            <a href="#date" class="breadcrumb grey-text text-grey lighten-1"><b>2.DATE</b></a>
                                            <a href="#depart" class="breadcrumb grey-text text-grey lighten-1">3.DÉPART & ARRIVÉE</a>
                                            <a></a>
                                        </div>
                                    </div>
                                </nav>
                                <div class="row">
                                    <img class="responsive-img" id="imgDate" src="../LePetitKiosque/assets/date.png">
                                    <div class="col s12 m4 l4 left-align">
                                        <h1 class="souligner"> DATES & HEURES</h1>
                                        <h2>Merci de choisir la date & <br> l'heure de départ.</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 offset-l3 l3">
                                        <!-- On vérifie que l'on récupère la valeur de date et on l'affiche sinon le champs reste vide-->
                                        <input name="date" value="<?= (isset($_POST['date'])) ? $date : ''; ?>" id ="date" type = "date" class = "datepicker" />
                                        <label>Veuillez choisir la date du trajet :</label>
                                         <!-- S'il y a une erreur on indique le message d'erreur du controleur-->
                                        <p class="NotValid" id="dateNameField"><?=isset($formError['date']) ? $formError['date'] : ''; ?></p>
                                    </div>
                                    <div class="col s12 l3">
                                         <!-- On vérifie que l'on récupère la valeur de hour et on l'affiche sinon le champs reste vide-->
                                        <input name="hour" value="<?=(isset($_POST['hour'])) ? $hour : ''; ?>" id="appt-time" type="time">
                                        <label for="appt-time">Veuillez choisir l'heure du départ :</label>
                                        <!-- S'il y a une erreur on indique le message d'erreur du controleur-->
                                        <p class="NotValid" id="hourField"><?=isset($formError['hour']) ? $formError['hour'] : ''; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row articleTrajetForm">
                                <nav class="dot hide-on-small-only" id="depart">
                                    <div class="nav-wrapper white">
                                        <div class="col s12">
                                            <a href="#services" class="breadcrumb grey-text text-grey lighten-1">1.SERVICES</a>
                                            <a href="#date" class="breadcrumb grey-text text-grey lighten-1">2.DATE</a>
                                            <a href="#depart" class="breadcrumb grey-text text-grey lighten-1"><b>3.DÉPART & ARRIVÉE</b></a>
                                            <a></a>
                                        </div>
                                    </div>
                                </nav>
                                <div class="col s12 m4 l4 left-align">
                                    <h2>Merci de choisir votre point de départ et votre point d'arrivée.</h2>
                                    <p>Voici une liste des trajets les plus fréquents.</p>
                                    <div>
                                        <img class="responsive-img" id="imgDepart" src="../LePetitKiosque/assets/from.png">
                                    </div>
                                </div>
                                <div class="col s12 m4 l4 left-align">
                                    <h1 class="souligner">DÉPART</h1>
                                    <?php
                                    foreach ($arrayGetLocation as $rowStartLocation) {
                                        ?>
                                        <p>
                                            <label>
                                                <!-- Après le "radio" je regarde si je récupére bien le $_POST['id_location_choice'] pour pouvoir l'afficher en cas d'erreur-->
                                                <input class="with-gap" name="id_location_choice" value="<?=$rowStartLocation->id_location_choice; ?>" 
                                                type="radio" <?=isset($_POST['id_location_choice']) && $_POST['id_location_choice'] == $rowStartLocation->id_location_choice ? 'checked' : ''; ?> />
                                                <span><?=$rowStartLocation->location_choice_name; ?></span>
                                                
                                            </label>
                                        </p>
                                        <?php
                                    } ?>
                                    <p class="NotValid" id="id_location_choiceField"><?=isset($formError['id_location_choice']) ? $formError['id_location_choice'] : ''; ?></p>
                                </div>
                                <div class="col s12 m4 l4 left-align">
                                    <h1 class="souligner">ARRIVÉE</h1>
                                    <?php
                                    foreach ($arrayGetLocationEnd as $rowArrivalLocation) {
                                        ?>
                                        <p>
                                            <label>
                                                <input class="with-gap" name="id_location_choice_fluo_location_choice" value="<?=$rowArrivalLocation->id_location_choice; ?>" 
                                                type="radio" <?=isset($_POST['id_location_choice_fluo_location_choice']) && $_POST['id_location_choice_fluo_location_choice'] == $rowArrivalLocation->id_location_choice ? 'checked' : ''; ?> />
                                                <span><?=$rowArrivalLocation->location_choice_name; ?></span>
                                            </label>
                                        </p>
                                        <?php
                                    } ?>
                                     <p class="NotValid" id="id_location_choice_fluo_location_choiceField"><?=isset($formError['id_location_choice_fluo_location_choice']) ? $formError['id_location_choice_fluo_location_choice'] : ''; ?></p>
                                </div>
                            </div>
                            <div class="row input-field col s12 l12" id="submitFormTrajetBtn">
                                <button class="waves-effect waves-light btn-large blue-grey lighten-3" type="submit" name="submitFormTrajet">VALIDER</button>
                                <p><a class="colorLink" href="index.php">Annuler</a></p>
                            </div>
                            </form>
                            <?php include 'actionBtn.php'; ?>
                        </div>
                        <?php include 'footer.php'; ?>
                        <?php
    }
?>
            </div>
        </div>
    </body>
    <!-- fin du footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/js.js"></script>
</html>