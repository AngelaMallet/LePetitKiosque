<?php
// Déclaration des regeX
$regexText = '/^[A-zÂ-ÿ -]+$/';

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


?>
   