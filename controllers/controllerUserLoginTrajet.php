<?php

require_once 'models/modelDatabase.php';
require_once 'models/modelTransports.php';

$trajetUserObj = new transports();

if (isset($_SESSION['id_users'])) {
    $trajetUserObj->id_users = $_SESSION['id_users'];
}
$arraytrajetUser = $trajetUserObj->userTrajetsInfos();
