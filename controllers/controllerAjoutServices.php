<?php
    
require_once 'models/modelDatabase.php';
require_once 'models/modeltypes.php';
$servicesObj = new types(); //$servicesObj est un nouvel objet de la classe types. On dit que l'on instancie la classe types.
    
  
// Je regarde s'il n'y a pas d'erreurs dans le formulaire 
// S'il n'y a pas d'erreurs et que je clique sur le bouton send alors 
//j'envoie les nouvelles données dans ma table fluo_transport
if (isset($_POST['submitTypesNameCarpooling'])) {
    $servicesObj->typesName;
    $servicesObj->addService(); 
    $addSuccess = true;
   } else {
       echo 'Mauvaise saisie';
}
   
?>

