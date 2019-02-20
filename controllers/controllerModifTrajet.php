<?php

require_once 'models/modelDatabase.php';
require_once 'models/modeltransports.php';
$trajetObj = new transports(); //$trajetObj est un nouvel objet de la classe types. On dit que l'on instancie la classe types.

if (isset($_GET['id_transports'])) {
    $_SESSION['id_transports'] = $_GET['id_transports'];
    $arrayUserTrajet = $trajetObj->displayUserTrajet();
}

$arrayGetLocation = $trajetObj->getLocation();
$arrayGetLocationEnd = $trajetObj->getLocationEnd();
$arrayGetService = $trajetObj->getService();

//Initialise $addSuccess en False pour afficher message
$addSuccess = false;
//Initialise $hideSuccess en true pour afficher inputform
$hideSuccess = true;

// Déclaration d'un tableau d'erreurs
$formError = [];

////date
if (isset($_POST['date'])) {
    //Si: je récupère la valeur de date
    $date = htmlspecialchars($_POST['date']);
    if (empty($_POST['date'])) {
        $formError['date'] = 'Saisie vide';
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

//id_types
if (isset($_POST['id_types'])) {
    $id_types = htmlspecialchars($_POST['id_types']);
}

//id_location_choice_start
if (isset($_POST['id_location_choice_start'])) {
    $id_location_choice_start = htmlspecialchars($_POST['id_location_choice_start']);
}

//id_location_choice_end
if (isset($_POST['id_location_choice_end'])) {
    $id_location_choice_end = htmlspecialchars($_POST['id_location_choice_end']);
}

if (count($formError) == 0 && isset($_POST['submitModifTrajet'])) {
    $trajetObj->date = $date;
    $trajetObj->hour = $hour;
    $trajetObj->id_types = $id_types;
    $trajetObj->id_location_choice_start = $id_location_choice_start;
    $trajetObj->id_location_choice_end = $id_location_choice_end;
    $trajetObj->modifTrajet();
}

// if (isset($_POST['deleteTrajet'])) {
    //$id_transportToDelete = $_GET['id_transports'];
    //$trajetObj->id_transports = $id_transportToDelete;
    //$trajetObj->deleteTrajet();
