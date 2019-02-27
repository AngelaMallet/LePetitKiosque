<?php

require_once 'models/modelDatabase.php';
require_once 'models/modeltransports.php';
$listTrajetsObj = new transports(); //$trajetObj est un nouvel objet de la classe types. On dit que l'on instancie la classe types.
$listTrajetArray = $listTrajetsObj->listAllTrajets();
