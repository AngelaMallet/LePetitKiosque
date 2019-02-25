<?php

require_once 'models/modelDatabase.php';
require_once 'models/modeltransports.php';
$trajetObj = new transports(); //$trajetObj est un nouvel objet de la classe transports. On dit que l'on instancie la classe transports.

$arrayGetLocation = $trajetObj->getLocation(); //requête qui permet de récuperer toutes les destinations de départ.
$arrayGetLocationEnd = $trajetObj->getLocationEnd(); //requête qui permet de récuperer toutes les destinations d'arrivée.
$arrayGetService = $trajetObj->getService(); //requête qui permet de récuperer tous les services qui sont dans la table fluo_location_choice

//j'initialise $addSuccess en False pour afficher les messages lors du succes de la création d'un trajet
$addSuccess = false;

// Déclaration d'un tableau d'erreurs
$formError = [];

////date
if (isset($_POST['date'])) {
    //Si: On récupère les variables envoyées par le formulaire (ici la valeur 'date')
    $date = htmlspecialchars($_POST['date']);
    if (empty($_POST['date'])) { // Détermine si la variable est considérée comme étant vide.
        //Une variable est considérée comme vide si elle n’existe pas ou si sa valeur est égale à FALSE.
        //empty () ne génère pas d'avertissement si la variable n'existe pas.
        $formError['date'] = 'Saisie vide'; // il faut utiliser le tableau d'erreurs pour afficher un message sur la Vue
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

//id_location_choice
if (isset($_POST['id_location_choice'])) {
    $id_location_choice = htmlspecialchars($_POST['id_location_choice']);
}

//id_location_choice_fluo_location_choice
if (isset($_POST['id_location_choice_fluo_location_choice'])) {
    $id_location_choice_fluo_location_choice = htmlspecialchars($_POST['id_location_choice_fluo_location_choice']);
}

if (count($formError) == 0 && isset($_POST['submitFormTrajet'])) {
    $trajetObj->id_users = $_SESSION['id_users'];
    $trajetObj->date = $date;
    $trajetObj->hour = $hour;
    $trajetObj->id_types = $id_types;
    $trajetObj->id_location_choice = $id_location_choice;
    $trajetObj->id_location_choice_fluo_location_choice = $id_location_choice_fluo_location_choice;
    $trajetObj->addTrajet();
    $addSuccess = true;
}
