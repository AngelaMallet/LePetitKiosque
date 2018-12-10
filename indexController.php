<?php

// Déclaration des regeX
$regexText = '/^[A-zÂ-ÿ -]+$/';
$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
$regexPassword = '/^[A-zÄ-ÿ0-9 -@_?!#$*€]+$/';

// Déclaration d'un tableau d'erreurs
$formError = [];

// Déclaration d'e la variable $modalError
$modalError = false;


////Name
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    if (!preg_match($regexText, $name)) {
        $formError['name'] = 'Saisie non valide';
    }
    if (empty($_POST['name'])) {
        $formError['name'] = 'Saisie vide';
    }
    $_SESSION['name'] = $name;
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

//login Attention il faut modifier la regex
if (isset($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
    if (!preg_match($regexText, $login)) {
        $formError ['login'] = 'Saisie non valide';
    }
    if (empty($_POST['login'])) {
        $formError ['login'] = 'Saisie vide';
    }
    $_SESSION['login'] = $login;
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

// on test si le choix est vide
if (isset($_POST['submit']) && !array_key_exists('choix', $_POST)) {
    $formError['choix'] = 'Saisie vide';
}

// on test si le choix existe 
if (isset($_POST['choix'])) {
    $choix = htmlspecialchars($_POST['choix']);
    $_SESSION['choix'] = $choix;
}

?>
   