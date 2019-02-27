<?php

require_once 'models/modelDatabase.php';
require_once 'models/modeltransports.php';
$trajetObj = new transports(); //$trajetObj est un nouvel objet de la classe transports.
//On dit que l'on instancie la classe transports.

//Pour selectionner le premier bouton radio dans le tableau $arrayGetService.
$count = 0;
//méthode qui permet de récuperer toutes les destinations de départ pour les afficher
//dans la Vue dans le formulaire sous forme de radio.
$arrayGetLocation = $trajetObj->getLocation();
//méthode qui permet de récuperer toutes les destinations
//d'arrivée pour les afficher dans la Vue.
$arrayGetLocationEnd = $trajetObj->getLocationEnd();
//méthode qui permet de récuperer tous les services qui sont dans la
//table fluo_location_choice pour les afficher dans la Vue.
$arrayGetService = $trajetObj->getService();

// création de la variable $addSuccess que j'initialise en False.
//Si les informations requises par l’utilisateur sont validées, $addSuccess=TRUE
//et renvoi un message de confirmation de la création d'un trajet.
$addSuccess = false;

// Déclaration d'un tableau d'erreurs vide.
$formError = [];

if (isset($_POST['submitFormTrajet'])) {
    ////date
    if (isset($_POST['date'])) {
        //Si: On récupère les variables envoyées par le formulaire (ici la valeur 'date')
        $date = htmlspecialchars($_POST['date']);
        if (empty($_POST['date'])) { // Détermine si la variable est considérée comme étant vide.
            //Une variable est considérée comme vide si elle n’existe pas ou si sa valeur est égale à FALSE.
            //empty () ne génère pas d'avertissement si la variable n'existe pas.
            $formError['date'] = 'Saisie vide';
            // Le tableau d'erreurs affichera un message sur la Vue au niveau
        //du champs de la date dans le formulaire
        }
        //strtotime today = date d'aujourd'hui / timestamp && qu'il n'est pas vide
        if (strtotime('today') > strtotime($date) && !empty($_POST['date'])) {
            $formError['date'] = 'Ne pas mettre de date antérieur à aujourd\'hui';
        }
    }

    ////hour
    if (isset($_POST['hour'])) {
        //Si: je récupère la valeur de hour
        $hour = htmlspecialchars($_POST['hour']);
        if (empty($_POST['hour'])) {
            $formError['hour'] = 'Saisie vide';
        }
    }

    //id_types pour choisir s'il s' agit d'un covoiturage, pour les courses ou un trajet scolaire
    if (isset($_POST['id_types'])) {
        $id_types = htmlspecialchars($_POST['id_types']);
    }

    //id_location_choice pour le choix de départ
    if (isset($_POST['id_location_choice'])) {
        $id_location_choice = htmlspecialchars($_POST['id_location_choice']);
        if (empty($_POST['id_location_choice'])) {
            $formError['id_location_choice'] = 'Saisie vide';
        }
    } else {
        $formError['id_location_choice'] = 'Saisie vide';
    }

    //id_location_choice_fluo_location_choice pour le choix de l'arrivée
    if (isset($_POST['id_location_choice_fluo_location_choice'])) {
        $id_location_choice_fluo_location_choice = htmlspecialchars($_POST['id_location_choice_fluo_location_choice']);
        if (empty($_POST['id_location_choice_fluo_location_choice'])) {
            $formError['id_location_choice_fluo_location_choice'] = 'Saisie vide';
        }
    } else {
        $formError['id_location_choice_fluo_location_choice'] = 'Saisie vide';
    }

    if (count($formError) == 0) {
        $trajetObj->id_users = $_SESSION['id_users'];
        $trajetObj->date = $date;
        $trajetObj->hour = $hour;
        $trajetObj->id_types = $id_types;
        $trajetObj->id_location_choice = $id_location_choice;
        $trajetObj->id_location_choice_fluo_location_choice = $id_location_choice_fluo_location_choice;
        $trajetObj->addTrajet();
        $addSuccess = true;
    }
}
