<?php

// Déclaration des regeX
$regexText = '/^[A-zÂ-ÿ -]+$/';
$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
// Déclaration d'un tableau d'erreurs
$formError = [];

//Name
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    if (!preg_match($regexText, $name)) {
        $formError['name'] = 'Saisie non valide';
    }
    if (empty($_POST['name'])) {
        $formError['name'] = 'Saisie vide';
    }
}

//lastName
if (isset($_POST['lastName'])) {
    $lastName = htmlspecialchars($_POST['lastName']);
    if (!preg_match($regexText, $lastName)) {
        $formError ['lastName'] = 'Saisie non valide';
    }
    if (empty($_POST['lastName'])) {
        $formError ['lastName'] = 'Saisie vide';
    }
}

//login      Attention il faut modifier la regex
if (isset($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
    if (!preg_match($regexText, $login)) {
        $formError ['login'] = 'Saisie non valide';
    }
    if (empty($_POST['login'])) {
        $formError ['login'] = 'Saisie vide';
    }
}

//password    Attention il faut modifier la regex
if (isset($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    if (!preg_match($regexText, $password)) {
        $formError ['password'] = 'Saisie non valide';
    }
    if (empty($_POST['password'])) {
        $formError ['password'] = 'Saisie vide';
    }
}

//password    Attention il faut modifier la regex
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    if (!preg_match($regexEmail, $email)) {
        $formError ['email'] = 'Saisie non valide';
    }
    if (empty($_POST['email'])) {
        $formError ['email'] = 'Saisie vide';
    }
}

//gender choix   
if (isset($_POST['choix'])) {
    $choix = ($_POST['choix']);
}
if (empty($_POST['choix'])) {
        $formError ['choix'] = 'Saisie vide';
    }

?>
   