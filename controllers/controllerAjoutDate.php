<?php
    
require_once 'models/modelDatabase.php';
require_once 'models/modeltransports.php';
$dayObj = new transports(); //$usersObj est un nouvel objet de la classe users. On dit que l'on instancie la classe users.
    
    
    
// Déclaration des regeX
//$regexText = '/^[A-zÂ-ÿ -]+$/';
//$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
//$regexPassword = '/^[A-zÄ-ÿ0-9 -@_?!#$*€]+$/';
//$regexPhone = '/^0[0-9]([ .-]?[0-9]{2}){4}$/';

//Pour les regexs les groupes sont mis dans des parenthèses. Dans les parenthèses, tout ce qui est entre les crochets sont des données demandées. 
//Tout ce  qui est hors crochets et hors parenthèses est obligatoire.
    
    
//Initialise $addSuccess en False pour afficher message
$addSuccess = false;
//Initialise $hideSuccess en true pour afficher inputform
$hideSuccess = true;
    
    
// Déclaration d'un tableau d'erreurs
$formError = [];

////date
if (isset($_POST['date'])) {
    //Si: je récupère la valeur de firstName
   $date = htmlspecialchars($_POST['date']);  // Pour accéder à la propriété $usersObj j'utilise l'opérateur -> 
    // qui permet d'accéder aux propriétés de la classe. Propriété est le nom d'une variable en POO
//    if (!preg_match($regexText, $date)) {
//        $formError['date'] = 'Saisie non valide';
//    }
    if (empty($_POST['date'])) {
        $formError['date'] = 'Saisie vide';
    }
        
}


////date
if (isset($_POST['hour'])) {
    //Si: je récupère la valeur de firstName
   $hour = htmlspecialchars($_POST['hour']);  // Pour accéder à la propriété $usersObj j'utilise l'opérateur -> 
    // qui permet d'accéder aux propriétés de la classe. Propriété est le nom d'une variable en POO
//    if (!preg_match($regexText, $date)) {
//        $formError['date'] = 'Saisie non valide';
//    }
    if (empty($_POST['hour'])) {
        $formError['hour'] = 'Saisie vide';
    }
        
}
    


if (!empty($formError)) {
    $modalError = true;
}
    
// Je regarde s'il n'y a pas d'erreurs dans le formulaire 
// S'il n'y a pas d'erreurs et que je clique sur le bouton send alors 
//j'envoie les nouvelles données dans ma table fluo_users
if (count($formError) == 0 && isset($_POST['submitFormDate'])) {
    $dayObj->date = $date;
    $dayObj->addDate(); 
    $addSuccess = true;
   }
?>

