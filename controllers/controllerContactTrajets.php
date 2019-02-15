<?php
require_once 'models/modelDatabase.php';
require_once 'models/modelUsers.php';
require_once 'models/modelTransports.php';

$ContactObj = new users(); //$usersObj est un nouvel objet de la classe users. On dit que l'on instancie la classe users.

   if (isset($_GET['id_users'])) {
       $ContactObj->infosContact();
   }
?>




