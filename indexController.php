<?php

// Déclaration des regeX
$regexText = '/^[A-zÂ-ÿ -]+$/';
$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
$regexPassword = '/^[A-zÄ-ÿ0-9 -@_?!#$*€]+$/';

// Déclaration d'un tableau d'erreurs
$formError = [];

// Déclaration de la variable $modalError
$modalError = false;


////Name
if (isset($_POST['fistName'])) {
    $fistName = htmlspecialchars($_POST['fistName']);
    if (!preg_match($regexText, $fistName)) {
        $formError['fistName'] = 'Saisie non valide';
    }
    if (empty($_POST['fistName'])) {
        $formError['fistName'] = 'Saisie vide';
    }
    $_SESSION['fistName'] = $fistName;
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
    $_SESSION['lastName'] = $lastName;
}

////tel
if (isset($_POST['tel'])) {
    $tel = htmlspecialchars($_POST['tel']);
    if (!preg_match($regexText, $tel)) {
        $formError ['tel'] = 'Saisie non valide';
    }
    if (empty($_POST['tel'])) {
        $formError ['tel'] = 'Saisie vide';
    }
    $_SESSION['tel'] = $tel;
}

////address
if (isset($_POST['address'])) {
    $address = htmlspecialchars($_POST['address']);
    if (!preg_match($regexText, $address)) {
        $formError ['address'] = 'Saisie non valide';
    }
    if (empty($_POST['address'])) {
        $formError ['address'] = 'Saisie vide';
    }
    $_SESSION['address'] = $address;
}


//
////password    Attention il faut modifier la regex
if (isset($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    if (!preg_match($regexPassword, $password)) {
        $formError ['password'] = 'Saisie non valide';
    }
    if (empty($_POST['password'])) {
        $formError ['password'] = 'Saisie vide';
    }
    $_SESSION['password'] = $password;
}

//email  Attention il faut modifier la regex
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    if (!preg_match($regexEmail, $email)) {
        $formError ['email'] = 'Saisie non valide';
    }
    if (empty($_POST['email'])) {
        $formError ['email'] = 'Saisie vide';
    }
    $_SESSION['email'] = $email;
}


// on test si startingPoint est vide :
if (isset($_POST['submitForm']) && !array_key_exists('startingPoint', $_POST)) {
    $formError['startingPoint'] = 'Saisie vide';
}

// on test si startingPoint existe :
if (isset($_POST['startingPoint'])) {
    $startingPoint = htmlspecialchars($_POST['startingPoint']);
    $_SESSION['startingPoint'] = $startingPoint;
}


?>
   