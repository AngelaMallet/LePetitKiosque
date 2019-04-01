<?php
/*
 * Je  crée une classe transports dont le parent est database donc transports hérite de tous les attributs
 * La class transports va permettre d'accéder à la table fluo_transports de la database fluo_colibri.
 */
class transports extends database
{
    // * On crée des attributs en visibilité public qui correspondent à chacun des champs de la table fluo_transport
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
    public $id_location_choice_start;
    public $id_location_choice_end;

    public function addTrajet()
    {/* * Methode addTrajet qui va ajouter un nouveau trajet dans la table fluo_transport
         *Insertion des données pour le trajet à l'aide de la requête préparée avec INSERT INTO et le nom des champs de la table
         * Nous sélectionnons le nom des champs à remplir et nous mettons en place des marqueurs nominatifs pour les valeurs à insérer
         */

        $queryResult = $this->database->prepare('INSERT INTO `fluo_transports` (`date`, `hour`, `id_types`, `id_users`, `id_location_choice_start`, `id_location_choice_end`) VALUES (:date, :hour, :id_types, :id_users, :id_location_choice, :id_location_choice_fluo_location_choice)');
        //Nous allons utiliser la fonction prépare pour mettre en place des bindValue pour récupérer les valeurs de l'objet, une fois les valeurs récupérées, nous exécutons la requête.
        //$this signifie l'objet courant. Lorsque nous appellerons cette méthode via un objet, c'est de cet objet qu'il sera question.
        //l'opérateur -> permet ici par exemple d'affecter l'objet coutant ($this) à la variable(propriété) date.
        //Nous utilisons les constantes PDO "PDO::PARAM_STR" pour une chaîne de caractère et "PDO::PARAM_INT" pour un entier.
        $queryResult->bindValue(':date', $this->date, PDO::PARAM_STR);
        $queryResult->bindValue(':hour', $this->hour, PDO::PARAM_STR);
        $queryResult->bindValue(':id_types', $this->id_types, PDO::PARAM_INT);
        $queryResult->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $queryResult->bindValue(':id_location_choice', $this->id_location_choice, PDO::PARAM_INT);
        $queryResult->bindValue(':id_location_choice_fluo_location_choice', $this->id_location_choice_fluo_location_choice, PDO::PARAM_INT);

        return $queryResult->execute(); //@return execute la requête pour ajouter un trajet.
    }

    public function getLocation() //requête qui permet de récuperer toutes les destinations de départ.
    {
        $queryResult = $this->database->query('SELECT `location_choice_name`, `id_location_choice` FROM `fluo_location_choice`');

        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getLocationEnd() //requête qui permet de récuperer toutes les destinations de d'arrivée'.
    {
        $queryResult = $this->database->query('SELECT `location_choice_name`, `id_location_choice` FROM `fluo_location_choice` ORDER BY location_choice_name');

        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

    public function getService() //requête qui permet de récuperer tous les services.
    {
        $queryResult = $this->database->query('SELECT `typesName`, `id_types` FROM `fluo_types`');

        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }

    /* * Methode listAllTrajets qui va afficher les trajets de la table fluo_transport
         *Selection des données à l'aide de la requête préparée avec SELECT et le nom des champs des tables
         * Nous choisissons d'afficher les trajets de la table fluo_transports dans l'ordre des dates des trajets avec un ORDER BY.
         */
    public function listAllTrajets()
    {
        //je fais ma requête dans une variable $query
        $query = ('SELECT `fluo_types`.`typesName`, `fluo_location_choice_aller`.`location_choice_name` AS `location_choice_name_aller`,
         `fluo_location_choice_retour`.`location_choice_name` AS `location_choice_name_retour`, 
        DATE_FORMAT( `fluo_transports`.`date`, "%d/%m/%Y") AS date, DATE_FORMAT(`fluo_transports`.`hour`, "%H:%i") AS `hour`, `fluo_transports`.`id_users` 
         FROM `fluo_transports` INNER JOIN `fluo_types` ON `fluo_transports`.`id_types` = `fluo_types`.`id_types` 
         INNER JOIN `fluo_location_choice` AS `fluo_location_choice_aller` 
         ON `fluo_transports`.`id_location_choice_start` = `fluo_location_choice_aller`.`id_location_choice` 
         INNER JOIN `fluo_location_choice` AS `fluo_location_choice_retour` 
         ON `fluo_transports`.`id_location_choice_end` = `fluo_location_choice_retour`.`id_location_choice` ORDER BY `fluo_transports`.`date`');
        //On crée un objet $listTrajetArray qui est un tableau
        //La fonction fetchAll() permet d'afficher toutes les données de la requête dans un tableau d'objet via le paramètre "PDO::FETCH_OBJ".
        $resultTrajets = $this->database->query($query);
        $listTrajetArray = $resultTrajets->fetchAll(PDO::FETCH_OBJ);

        return $listTrajetArray;
    }

    /* * Methode userTrajetsInfos qui va afficher les informations de la personne "id_users" qui propose le trajet selectionné
        *Selection des données à l'aide de la requête préparée avec SELECT et le nom des champs de la table fluo_transports.
        */
    public function userTrajetsInfos()
    {
        $query = ('SELECT `fluo_transports`.`id_transports`, `fluo_types`.`typesName`, `fluo_location_choice_aller`.`location_choice_name` AS
         `location_choice_name_aller`, `fluo_location_choice_retour`.`location_choice_name` AS 
         `location_choice_name_retour`, DATE_FORMAT( `fluo_transports`.`date`, "%d/%m/%Y") AS `date`, DATE_FORMAT(`fluo_transports`.`hour`, "%H:%i") AS `hour`,`fluo_transports`.`id_users` FROM
          `fluo_transports` INNER JOIN `fluo_types` ON `fluo_transports`.`id_types` = `fluo_types`.`id_types` 
          INNER JOIN `fluo_location_choice` AS `fluo_location_choice_aller` 
          ON `fluo_transports`.`id_location_choice_start` = `fluo_location_choice_aller`.`id_location_choice` 
          INNER JOIN `fluo_location_choice` AS `fluo_location_choice_retour` 
          ON `fluo_transports`.`id_location_choice_end` = `fluo_location_choice_retour`.`id_location_choice`  
          WHERE id_users=:id_users ORDER BY `fluo_transports`.`date`;');

        $resultTrajets = $this->database->prepare($query);
        $resultTrajets->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $resultTrajets->execute();
        $arraytrajetUser = $resultTrajets->fetchAll(PDO::FETCH_OBJ);

        return  $arraytrajetUser;
    }

    /* * Methode modifTrajet qui va permettre de modifier les trajets de la table fluo_transport selon l'id_transports de la table fluo_transports
         *Modification des données à l'aide de la requête préparée avec un UPDATE et le nom des champs de la table fluo_transports
         *Insertion des valeurs des variables via les marqueurs nominatifs.
         * Nous choisissons d'afficher les trajets de la table fluo_transports dans l'ordre des dates des trajets avec un ORDER BY.
         */
    public function modifTrajet()
    {
        $queryResult = $this->database->prepare('UPDATE `fluo_transports` SET `id_types` = :id_types, `date` = :date, `hour` = :hour, `id_location_choice_start` = :id_location_choice_start, `id_location_choice_end` = :id_location_choice_end WHERE id_transports=:id_transports;');

        $queryResult->bindValue(':id_transports', $_SESSION['id_transports'], PDO::PARAM_INT);
        $queryResult->bindValue(':date', $this->date, PDO::PARAM_STR);
        $queryResult->bindValue(':hour', $this->hour, PDO::PARAM_STR);
        $queryResult->bindValue(':id_types', $this->id_types, PDO::PARAM_INT);
        $queryResult->bindValue(':id_location_choice_start', $this->id_location_choice_start, PDO::PARAM_INT);
        $queryResult->bindValue(':id_location_choice_end', $this->id_location_choice_end, PDO::PARAM_INT);

        return $queryResult->execute();
    }

    public function displayUserTrajet() //Pour récuperer les trajets avec l'id_transports de la table fluo_transports
    {
        $queryResult = $this->database->prepare('SELECT * FROM `fluo_transports` WHERE `id_transports` = :id_transports');
        $queryResult->bindValue(':id_transports', $this->id_transports, PDO::PARAM_INT);
        $queryResult->execute();

        return $queryResult->fetch(PDO::FETCH_OBJ);
    }

    // Methode deleteTrajet qui va supprimer le trajet selectionné via l'idTransports de la table fluo_transports.
    public function deleteTrajet()
    {
        $queryResult = $this->database->prepare('DELETE FROM `fluo_transports` WHERE `id_transports` = :id_transports');
        $queryResult->bindValue(':id_transports', $this->id_transports, PDO::PARAM_INT);

        return $queryResult->execute();
    }
}
