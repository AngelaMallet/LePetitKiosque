<?php

require_once 'models/modelDatabase.php';
require_once 'models/modelUsers.php';
$listUsersObj = new users(); //$usersObj est un nouvel objet de la classe users. On dit que l'on instancie la classe users.

if (isset($_POST['confirmDeleteUser'])) {
    $listUsersObj->id_users = $_POST['confirmDeleteUser'];
    $listUsersObj->deleteUsers();
}

if (isset($_POST['certifiedStatut'])) {
    $listUsersObj->id_users = $_POST['certifiedStatut'];
    $listUsersObj->certified = $_POST['certified'.$_POST['certifiedStatut']];
    $listUsersObj->updateCertifiedStatut();
}
   $listUsersArray = $listUsersObj->listAllUsers();
