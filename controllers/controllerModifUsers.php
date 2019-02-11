<?php
    
require_once 'models/modelDatabase.php';
require_once 'models/modelUsers.php';

$modifUser = new users(); //$usersObj est un nouvel objet de la classe users. On dit que l'on instancie la classe users.
 



// Je regarde s'il n'y a pas d'erreurs dans le formulaire 
// S'il n'y a pas d'erreurs et que je clique sur le bouton send alors 
//j'envoie les nouvelles données dans ma table fluo_users

     
// Déclaration des regeX
$regexText = '/^[A-zÂ-ÿ -]+$/';
$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
$regexPassword = '/^[A-zÄ-ÿ0-9 -@_?!#$*€]+$/';
$regexPhone = '/^0[0-9]([ .-]?[0-9]{2}){4}$/';

//Pour les regexs les groupes sont mis dans des parenthèses. Dans les parenthèses, tout ce qui est entre les crochets sont des données demandées. 
//Tout ce  qui est hors crochets et hors parenthèses est obligatoire.
    
    
//Initialise $addSuccess en False pour afficher message
$addSuccess = false;
//Initialise $hideSuccess en true pour afficher inputform
$hideSuccess = true;
    
    
// Déclaration d'un tableau d'erreurs
$formError = [];

////firstName
if (isset($_POST['firstName'])) {
    //Si: je récupère la valeur de firstName
  $firstName = htmlspecialchars($_POST['firstName']);  // Pour accéder à la propriété $usersObj j'utilise l'opérateur -> 
    // qui permet d'accéder aux propriétés de la classe. Propriété est le nom d'une variable en POO
    if (!preg_match($regexText, $firstName)) {
        $formError['firstName'] = 'Saisie non valide';
    }
    if (empty($_POST['firstName'])) {
        $formError['firstName'] = 'Saisie vide';
    }
        
}
    
////lastName
if (isset($_POST['lastName'])) {
    $lastName = htmlspecialchars($_POST['lastName']);
    if (!preg_match($regexText, $lastName)) {
        $formError ['lastName'] = 'Saisie non valide';
    }
    if (empty($_POST['lastName'])) {
        $formError ['lastName'] = 'Saisie vide';
    }
        
}
    
//email  
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    if (!preg_match($regexEmail, $email)) {
        $formError['email'] = 'Saisie non valide';
    }
    if (empty($_POST['email'])) {
        $formError['email'] = 'Saisie vide';
    }
        
}

   
//tel  
if (isset($_POST['tel'])) {
    $tel = htmlspecialchars($_POST['tel']);
    if (!preg_match($regexPhone, $tel)) {
        $formError['tel'] = 'Saisie non valide';
    }
    if (empty($_POST['tel'])) {
        $formError['tel'] = 'Saisie vide';
    }
        
}
    
//address
if (isset($_POST['address'])) {
    $address = htmlspecialchars($_POST['address']);
//    if (!preg_match($usersObj->address)) {              // Pour le moment pas encore de regex
//        $formError ['address'] = 'Saisie non valide';
//    }
//    if (empty($_POST['address'])) {
//        $formError ['address'] = 'Saisie vide';
//    }
        
}

if (!empty($formError)) {
    $modalError = true;
}
  
if (count($formError) == 0 && isset($_POST['submitFormModif'])) {
    $modifUser->firstName = $firstName;
    $modifUser->lastName = $lastName;
    $modifUser->email = $email; 
    $modifUser->tel = $tel;
    $modifUser->address = $address;
    $modifUser->id_users = $_SESSION['id_users'];
    $modifUser->modifUser(); 
    $addSuccess = true;
    } 
    if($modifUser->modifUser()){
           $_SESSION['firstName'] = $firstName;
           $_SESSION['lastName'] = $lastName;  
           $_SESSION['email'] = $email;  
           $_SESSION['tel'] = $tel; 
           $_SESSION['address'] = $address; 
    }
    
  
?>

