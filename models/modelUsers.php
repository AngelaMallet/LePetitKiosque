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
class users extends database
{
    // Attributs en private
    public $id_users;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $tel;
    public $address;

    public function checkfree()
    {
        $queryResult = $this->database->prepare('SELECT * FROM fluo_users WHERE email = :email');
        $queryResult->bindValue(':email', $this->email, PDO::PARAM_STR);
        $queryResult->execute();

        return $queryResult->rowCount();
    }

    /**
     * Fonction qui ajoute un user.
     */
    public function addUsers()
    { //addUsers est une méthode avec la requête
        //qui va inclure les nouveaux users dans la table fluo_users.

        //Insertion des données du users à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
        //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
        // :marqueurs nominatifs
        $queryResult = $this->database->prepare('INSERT INTO fluo_users(firstName, lastName, email, password, tel, address, certified, id_user_type) VALUES (:firstName, :lastName, :email, :password, :tel, :address, 0, 1)');
        $queryResult->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryResult->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryResult->bindValue(':email', $this->email, PDO::PARAM_STR);
        $queryResult->bindValue(':password', $this->password, PDO::PARAM_STR);
        $queryResult->bindValue(':tel', $this->tel, PDO::PARAM_STR);
        $queryResult->bindValue(':address', $this->address, PDO::PARAM_STR);
//        $queryResult->bindValue(':certified',0, PDO::PARAM_INT);
//        $queryResult->bindValue(':id_user_type',1, PDO::PARAM_INT);
        return $queryResult->execute(); //@return exécute la requête pour ajouter un user.
    }

    public function listAllUsers()
    {
        $queryResult = $this->database->query('SELECT * FROM fluo_users ORDER BY lastName');
        $allUsersData = $queryResult->fetchAll(PDO::FETCH_OBJ);

        return $allUsersData;
    }

    public function infosUsers()
    {
        $query = 'SELECT `id_users`, `firstName`, `lastName`, `email`, `password`, `tel`, `address` FROM fluo_users WHERE id_users=:id_users';
        //le résultat de ma requête je le stocke dans $showProfileList
        //$this = correspond aux attributs de ma classe ex patients, à l'élément de ma classe (table patients)
        $resultProfileUsers = $this->database->prepare($query);
        //avec le this=ATTRIBUT il faut cibler l'élément de ma classe
        //Je lie le marqueur nominatif id à l'attribut id
        $resultProfileUsers->bindValue(':id_users', $_GET['id_users'], PDO::PARAM_INT);
        $resultProfileUsers->execute();
        $arrayProfileUsers = $resultProfileUsers->fetch(PDO::FETCH_OBJ);

        return $arrayProfileUsers;
        //le résultat = on lui demande d'aller chercher les éléments firstname,lastname...etc donc il faut
        //faire un fetchALL en utilisant l'objet PDO.
    }

    public function verifUser($email)
    {
        $query = 'SELECT * FROM fluo_users WHERE email =:email';
        $verifUser = $this->database->prepare($query);
        $verifUser->bindValue(':email', $email, PDO::PARAM_STR);
        $verifUser->execute();
        $infosUser = $verifUser->fetch(PDO::FETCH_OBJ);

        return $infosUser;
    }

    public function modifUser()
    { //addAllpatients est une méthode avec la requête
        //qui va inclure les nouveaux patients dans la table patients.

        //Modifications des données du patient à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
        //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
        // :marqueurs nominatifs
        $queryResult = $this->database->prepare('UPDATE fluo_users SET firstName=:firstName, lastName=:lastName, email=:email,  tel=:tel, address=:address WHERE id_users=:id_users;');
        $queryResult->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryResult->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryResult->bindValue(':email', $this->email, PDO::PARAM_STR);
        $queryResult->bindValue(':tel', $this->tel, PDO::PARAM_STR);
        $queryResult->bindValue(':address', $this->address, PDO::PARAM_STR);
        $queryResult->bindValue(':id_users', $_SESSION['id_users'], PDO::PARAM_INT);

        return $queryResult->execute();
    }

    public function infosContact()
    {
        $query = 'SELECT * FROM fluo_users WHERE id_users =:id_users';
        $verifUser = $this->database->prepare($query);
        $verifUser->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $verifUser->execute();
        $infosUser = $verifUser->fetch(PDO::FETCH_OBJ);

        return $infosUser;
    }

    public function userInformations()
    {
        $query = ('SELECT * FROM fluo_users WHERE id_users=:id_users;');

        $resultTrajets = $this->database->prepare($query);
        $resultTrajets->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $resultTrajets->execute();
        $arrayinfoUser = $resultTrajets->fetchAll(PDO::FETCH_OBJ);

        return  $arrayinfoUser;
    }
}
