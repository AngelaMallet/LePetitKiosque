<?php
    
require_once 'models/modelDatabase.php';
require_once 'models/modeltransports.php';
$dayObj = new transports(); //$usersObj est un nouvel objet de la classe users. On dit que l'on instancie la classe users.
    
    
    

//Initialise $addSuccess en False pour afficher message
$addSuccess = false;
//Initialise $hideSuccess en true pour afficher inputform
$hideSuccess = true;
    
    
// Déclaration d'un tableau d'erreurs
$formError = [];

////date
if (isset($_POST['date'])) {
    //Si: je récupère la valeur de firstName
   $date = htmlspecialchars($_POST['date']);  // Pour accéder à la propriété $dayObj  j'utilise l'opérateur -> 
    if (empty($_POST['date'])) {
        $formError['date'] = 'Saisie vide';
    }
        
}


////date
if (isset($_POST['hour'])) {
    //Si: je récupère la valeur de hour
   $hour = htmlspecialchars($_POST['hour']);  // Pour accéder à la propriété $dayObj j'utilise l'opérateur -> 
    if (empty($_POST['hour'])) {
        $formError['hour'] = 'Saisie vide';
    }
        
}
    


if (!empty($formError)) {
    $modalError = true;
}
    
// Je regarde s'il n'y a pas d'erreurs dans le formulaire 
// S'il n'y a pas d'erreurs et que je clique sur le bouton send alors 
//j'envoie les nouvelles données dans ma table fluo_transport
if (count($formError) == 0 && isset($_POST['submitFormDate'])) {
    $dayObj->date = $date;
    $dayObj->hour = $hour;
    $dayObj->addDate(); 
    $addSuccess = true;
   } else {
       echo 'Mauvaise saisie';
}
   
?>

