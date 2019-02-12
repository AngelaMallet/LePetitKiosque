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
class types extends database {
      // Attributs en private
      public $typesName;      
      

    public function addService() { //addService est une méthode avec la requête 
    //qui va inclure les nouveaux users dans la table fluo_users.
        
    //Insertion des données du users à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
    //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
 // :marqueurs nominatifs 
        $queryResult = $this->database->prepare('INSERT INTO fluo_types(typesName) VALUES (:typesName)'); 
        $queryResult->bindValue(':typesName', $this->typesName, PDO::PARAM_STR);
        return $queryResult->execute(); //@return exécute la requête pour ajouter un typesName.
    }
        
}
?>