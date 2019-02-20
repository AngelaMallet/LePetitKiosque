<?php

require_once 'models/modelDatabase.php';
require_once 'models/modelTransports.php';
require_once 'models/modelUsers.php';

$trajetUserObj = new transports();
$infoUserObj = new users();

if (isset($_POST['confirmDeleteTrajet'])) {
    $trajetUserObj->id_transports = $_POST['id_transports'];
    $trajetUserObj->deleteTrajet();
}

if (isset($_SESSION['id_users'])) {
    $trajetUserObj->id_users = $_SESSION['id_users'];
    $arraytrajetUser = $trajetUserObj->userTrajetsInfos();
}

if (isset($_SESSION['id_users'])) {
    $infoUserObj->id_users = $_SESSION['id_users'];
    $arrayinfoUser = $infoUserObj->userInformations();
}
