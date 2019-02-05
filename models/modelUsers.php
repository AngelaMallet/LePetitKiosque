<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Je  crée une classe users dont le parent est database donc users hérite de tous les attributs
 * La class users va permettre d'accéder à la table fluo_users de la database fluo_colibri.
 */
class users extends database {
      // Attributs en private
      public $id_users;       
      public $firstName;
      public $lastName;
      public $email;
      public $password;
      public $tel;
      public $address;
        


    // Méthode magique __construct() L’évènement qui appelle la méthode__construct est la création de l'objet.
    public function __construct() { //Le construct a été déclaré en visibilité publique afin de pouvoir être invoqué de n'importe quel endroit du site.
        parent::__construct();
    }

    /**
     * Fonction qui ajoute un user
     * @return type EXECUTE
     */
    public function addUsers() { //addUsers est une méthode avec la requête 
    //qui va inclure les nouveaux users dans la table fluo_users.
    
    //Insertion des données du users à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
    //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
 // :marqueurs nominatifs 
        $queryResult = $this->database->prepare('INSERT INTO fluo_users(firstName, lastName, email, password, tel, address) VALUES (:firstName, :lastName, :email, :password, :tel, :address)'); 
        $queryResult->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryResult->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryResult->bindValue(':email', $this->email, PDO::PARAM_STR);
        $queryResult->bindValue(':password', $this->password, PDO::PARAM_STR);
        $queryResult->bindValue(':tel', $this->tel, PDO::PARAM_STR);
        $queryResult->bindValue(':address', $this->address, PDO::PARAM_STR);
        return $queryResult->execute(); //@return exécute la requête pour ajouter un user.
    }
    
       public function __destruct() {
        parent::__destruct();
    }
    
}
?>