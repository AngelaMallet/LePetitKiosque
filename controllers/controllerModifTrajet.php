<?php

require_once 'models/modelDatabase.php';
require_once 'models/modeltransports.php';
//$trajetObj est un nouvel objet de la classe transports. On dit que l'on instancie la classe transports.
$trajetObj = new transports();

//Permet de recupérer le bon trajet à mofifier grâce à son id "id_transports"
if (isset($_GET['id_transports'])) {
    $trajetObj->id_transports = $_GET['id_transports'];
    $arrayUserTrajet = $trajetObj->displayUserTrajet();
    //Si le trajet n'existe pas dans la table fluo_transports alors, redirection vers une
    //alerte.(page avec retour possible sur le comte de l'utilisateur)
    if ($arrayUserTrajet == false) {
        header('location: notValidTrajet.php');
        exit();
    } else {
        // Si id_transports existe alors je passe l'id_transports en session.
        $_SESSION['id_transports'] = $_GET['id_transports'];
    }
}

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

////date
//On test si la valeur 'date' existe dans le tableau $_POST
if (isset($_POST['date'])) {
    //Si: je récupère la valeur de date
    //j’utilise la fonction htmlspecialchars() qui protège
    //les variables et pour empêcher les injections de code Javascript ou HTML
    $date = htmlspecialchars($_POST['date']);
    // Détermine si la variable est considérée comme étant vide.
    //Une variable est considérée comme vide si elle n’existe pas ou si sa valeur est égale à FALSE.
    //empty () ne génère pas d'avertissement si la variable n'existe pas.
    if (empty($_POST['date'])) {
        // Le tableau d'erreurs affichera un message sur la Vue au niveau
        //du champs de la date dans le formulaire
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

//si le tableau d'erreurs est vide et que le formulaire est envoyé alors
//je modifie le trajet.
if (count($formError) == 0 && isset($_POST['submitModifTrajet'])) {
    $trajetObj->date = $date;
    $trajetObj->hour = $hour;
    $trajetObj->id_types = $id_types;
    $trajetObj->id_location_choice_start = $id_location_choice_start;
    $trajetObj->id_location_choice_end = $id_location_choice_end;
    $trajetObj->modifTrajet();
    header('Location: user-infosBis.php');
    exit;
}
