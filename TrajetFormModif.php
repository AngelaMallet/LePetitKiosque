<?php
session_start(); // On démarre la session AVANT toute chose
require_once 'controllers/controllerModifTrajet.php';
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
    <!-- -->
    <!-- J'inclue la navbar avec un include-->
    <?php include 'nav.php'; ?>
    <div class="container center-align">
        <div class="col s12 m6 center-align">
            <h1>Modifier votre trajet</h1>
            <p class="rotate"><mark>Toujours en trois étapes :</mark></p>
        </div>
        </nav>
        <div class="col l12">
            <img class="responsive-img" src="assets/car.png" width="200" height="200">
        </div>

        <form method="POST" class="col s12 m12 l12" action="">
            <div class="row">
            <h1 class="souligner">SERVICES</h1>
                <div class="col s6 m12 offset-l4 left-align"> 
                    <?php
foreach ($arrayGetService as $rowService) {
    ?>
                    <span>
                        <label>
                            <input class="with-gap" name="id_types" value="<?=$rowService->id_types; ?>" type="radio"
                                <?=($rowService->id_types == $arrayUserTrajet->id_types) ? 'checked' : ''; ?> />
                            <span><?=$rowService->typesName; ?></span>
                        </label>
                    </span>
                    <?php
}?>
                </div>
            </div>
            <div class="row">
                <h1 class="souligner">DATE & HEURE</h1>
                <div class="col s12 offset-l1 l11">
                    <div class="row input-field col s12 offset-l2 l4">
                        <input name="date"
                            value="<?=(isset($trajetObj->date)) ? $trajetObj->date : $arrayUserTrajet->date; ?>"
                            id="date" type="date" class="datepicker" />
                        <label>Veuillez choisir la date du trajet :</label>
                        <p class="NotValid" id="dateNameField">
                            <?=isset($formError['date']) ? $formError['date'] : ''; ?></p>
                    </div>
                    <div class="row input-field col s12 ffset-l2 l4">
                        <input name="hour"
                            value="<?=(isset($trajetObj->hour)) ? $trajetObj->hour : $arrayUserTrajet->hour; ?>"
                            id="appt-time" type="time">
                        <label for="appt-time">Veuillez choisir l'heure du départ :</label>
                        <p class="NotValid" id="hourField"><?=isset($formError['hour']) ? $formError['hour'] : ''; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 offset-l3 l3 left-align">
                    <h1 class="souligner">DÉPART</h1>
                    <?php
foreach ($arrayGetLocation as $rowStartLocation) {
        ?>
                    <p>
                        <label>
                            <input class="with-gap" name="id_location_choice_start"
                                value="<?=$rowStartLocation->id_location_choice; ?>" type="radio"
                                <?=($rowStartLocation->id_location_choice == $arrayUserTrajet->id_location_choice_start) ? 'checked' : ''; ?> />
                            <span><?=$rowStartLocation->location_choice_name; ?></span>
                        </label>
                    </p>
                    <?php
    }?>

                </div>
                <div class="col s12 m4 offset-l1 l5 left-align">
                    <h1 class="souligner">ARRIVÉE</h1>
                    <?php
foreach ($arrayGetLocationEnd as $rowArrivalLocation) {
        ?>
                    <p>
                        <label>
                            <input class="with-gap" name="id_location_choice_end"
                                value="<?=$rowArrivalLocation->id_location_choice; ?>" type="radio"
                                <?=($rowArrivalLocation->id_location_choice == $arrayUserTrajet->id_location_choice_end) ? 'checked' : ''; ?> />
                            <span><?=$rowArrivalLocation->location_choice_name; ?></span>
                        </label>
                    </p>
                    <?php
    }?>

                </div>
            </div>
            <div class="row input-field col s12 l12" id="submitFormTrajetBtn">
                <button class="waves-effect waves-light btn-large blue-grey lighten-3" type="submit"
                    name="submitModifTrajet">VALIDER</button>
                <p><a class="colorLink" href="user-infosBis.php">Annuler</a></p>
        </form>
    </div>
    </div>




    <?php include 'actionBtn.php'; ?>
    </div>
    <?php include 'footer.php'; ?>



</body>
<!-- fin du footer -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/js.js"></script>

</html>