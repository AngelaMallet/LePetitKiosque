<?php
require_once 'models/modelDatabase.php';
require_once 'models/modelUsers.php';
$listUsersObj = new users(); //$usersObj est un nouvel objet de la classe users. On dit que l'on instancie la classe users.
  
//
//if (isset($_GET['id'])) {
//    $listpatientsArrayObj->id = $_GET['id'];                                                                                                                                                                                                                                 
//   $listPatientsArray = $listpatientsArrayObj->DeletePatient();
//  $extra = 'liste-patients.php';
//            header("Location: http://localhost:8888/PDO-P2/$extra");
//            exit;
//}
//    
    

   $listUsersArray = $listUsersObj->listAllUsers();

?>



