<?php

/* 
Je crée la classe database.
 * J'utilise un constructeur qui est une méthode magique de POO.
 * La méthode __construct n'attend pas que je l'appelle, elle est automatiquement appelée.
 * Mon constructeur à été déclaré en visibilité publique pour pouvoir être invoqué de n'importe quel endroit de mon site.
 * 
 * 
 * Une fois que la connexion à été faite ainsi que la requête la méthode magique __destruct détrui la connexion avec la BDD.                        
 */

/*
 * Je créée un objet PDO pour me connecter à ma base de données mysql.
*  Je définis l'objet database grâce à la variable $this. 
 * J'initialise l'objet PDO à ma variable de connexion $this->database et 
 * je lui définis les variables de connexion (interieur de la parenthèse).
 * 
 * en 1e : le type de base de données (mysql), l'adresse du serveur (localhost) et le nom de ma BDD (fluo_colibri).
 * en 2e : le login de ma BDD (pda).
 * en 3e : le mot de passe de ma BDD (pda).
 * 
 * J'utilise le couple TRY/CATCH pour me permettre de gérer une erreur de connexion à ma BDD.
 * TRY : tente de se connecter à ma BDD et s'il y a une erreur CATCH renverra un message d'erreur
 * personnalisé grâce à l'attribut des erreurs qui est défini en mode d'affichage: ERRMODE_EXCEPTION. !!!!!ATTENTION!!!! A modifier
 * car j'utilise ERRMODE_WARNING pour développer qui permet d'afficher les erreurs en détail.
 */

class database {
    public $database;
    public function __construct(){
        try {
            $this->database = new PDO('mysql:host=localhost;dbname=fluo_colibri;charset=utf8', 'pda', 'pda', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)); //Ouvrir la connexion
        } catch (Exception $error) {
            die('Erreur de connexion ' . $error->getMessage());    
        }
    }

    public function __destruct(){
        $this->database = NULL;  //Fermer la connexion
    }
}
?>