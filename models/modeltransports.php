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
class transports extends database
{
    // Attributs en private
    public $id_transports;
    public $id_types;
    public $place;
    public $date;
    public $typesName;
    public $hour;
    public $id_users;
    public $id_location_choice;
    public $location_choice_name;
    public $id_location_choice_fluo_location_choice;

    public function addTrajet()
    { //addTrajet est une méthode avec la requête
        //qui va inclure les nouveaux users dans la table fluo_transports.

        //Insertion des données pour le trajet à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
        //Insertion des valeurs des variables via les marqueurs nominatifs exemple :nomdumarqueur en gros c'est comme un alias
        // :marqueurs nominatifs
        $queryResult = $this->database->prepare('INSERT INTO `fluo_transports` (`date`, `hour`, `id_types`, `id_users`, `id_location_choice`, `id_location_choice_fluo_location_choice`) VALUES (:date, :hour, :id_types, :id_users, :id_location_choice, :id_location_choice_fluo_location_choice)');
        $queryResult->bindValue(':date', $this->date, PDO::PARAM_STR);
        $queryResult->bindValue(':hour', $this->hour, PDO::PARAM_STR);
        $queryResult->bindValue(':id_types', $this->id_types, PDO::PARAM_INT);
        $queryResult->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $queryResult->bindValue(':id_location_choice', $this->id_location_choice, PDO::PARAM_INT);
        $queryResult->bindValue(':id_location_choice_fluo_location_choice', $this->id_location_choice_fluo_location_choice, PDO::PARAM_INT);

        return $queryResult->execute();  //@return exécute la requête pour ajouter un trajet.
    }

    public function getLocation()
    {
        $queryResult = $this->database->query('SELECT `location_choice_name`, `id_location_choice` FROM `fluo_location_choice`');

        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getLocationEnd()
    {
        $queryResult = $this->database->query('SELECT `location_choice_name`, `id_location_choice` FROM `fluo_location_choice`');

        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getService()
    {
        $queryResult = $this->database->query('SELECT `typesName`, `id_types` FROM `fluo_types`');

        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}
