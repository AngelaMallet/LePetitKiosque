<?php
require_once 'models/modelDatabase.php';
require_once 'models/modelUsers.php';
    
$user = new users(); //$usersObj est un nouvel objet de la classe users. On dit que l'on instancie la classe users.
    
    
$regexEmail = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/';
$regexPassword = '/^[A-zÄ-ÿ0-9 -@_?!#$*€]+$/';
    
// Déclaration d'un tableau d'erreurs
$formError = [];
$logSucces = FALSE;
    
//email  
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    if (empty($email)) {
        $formError['email'] = 'Veuillez saisir votre adresse email';
    }
        
}
    
if (isset($_POST['password'])) {
    $password = htmlspecialchars($_POST['password']);
    if (empty($password)) {
        $formError['password'] = 'Veuillez saisir votre mot de passe';
    }
}
    
if (count($formError) == 0 && isset($_POST['logBtn'])) {
   $infosUser =$user->verifUser($email);
   $logSucces = true;
   if (is_object($infosUser)){
       if(password_verify($password, $infosUser->password)) {
           $_SESSION['id_users'] = $infosUser->id_users;
           $_SESSION['firstName'] = $infosUser->firstName;
           $_SESSION['lastName'] = $infosUser->lastName;  
           $_SESSION['email'] = $infosUser->email;  
           $_SESSION['tel'] = $infosUser->tel; 
           $_SESSION['address'] = $infosUser->address; 
           $extra = 'user-infos.php';
            header("Location: http://localhost:8888/LePetitKiosque/$extra");
            exit;
           
       }
           
   }else {
      echo 'login ou mot de passe incorrect';
}   
}