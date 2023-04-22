<?php
function bddConnection() {
    // Tentative de connexion à la base de données MySQL 
    try {
        require('config.php');
        // chaine de connexion avec API PDO
        $var = new PDO("mysql:host=" . $server .";dbname=" . $dbName, $user, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $var->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $var;
    }
    // En cas de problème dans la tentative connexion on termine le script php et on affichera le message d'erreur
    catch(PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
}