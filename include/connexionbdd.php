<?php

$servername = 'localhost';
$username = 'root';
$password = '';
try {
    //On établit la connexion
    $connexion = new PDO("mysql:host=$servername;", $username, $password);
    //Définir les modes d'erreurs et d'exceptions
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //on va affecter notre requete sql à une variable
    $sql = "CREATE DATABASE GrotteReptileBDD CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql);
}
//On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
catch (PDOException $e) {
    date_default_timezone_set("Europe/Paris");
    setlocale(LC_TIME, "fr_FR");
    $fichier = fopen("error.log", "a+");
    fwrite($fichier, date("d/m/Y H:i:s : ") . $e->getMessage() . "\n");
    fclose($fichier);
}

$servername = 'localhost';
$dbname = 'GrotteReptileBDD';
$username = 'root';
$password = '';

try {
    //On établit la connexion
    $connexion = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    //Définir les modes d'erreurs et d'exceptions
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //on va affecter notre requete sql à une variable
    $sql = "CREATE TABLE users (
        iduser INT(5) AUTO_INCREMENT PRIMARY KEY,
        prenom VARCHAR(50) NOT NULL,
        nom VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        mdp VARCHAR(100) NOT NULL,
        userrole VARCHAR(50) NOT NULL
    )CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql);
    //creation de la table formation
    $sql1 = "CREATE TABLE personnages (
        idpersonnage INT(5) AUTO_INCREMENT PRIMARY KEY,
        nompersonnage VARCHAR(50) NOT NULL,
        race VARCHAR(20) NOT NULL,
        classe VARCHAR(20) NOT NULL,
        genre VARCHAR(20) NOT NULL,
        strength INT(5) NOT NULL,
        agility INT(5) NOT NULL,
        intelligence INT(5) NOT NULL,
        constitution INT(5) NOT NULL,
        charisma INT(5) NOT NULL,
        wisdom INT(5) NOT NULL,
        iduser INT(5) NOT NULL
    )CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql1);
}
//On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
catch (PDOException $e) {
    $fichier = fopen("error.log", "a+");
    fwrite($fichier, date("d/m/Y H:i:s : ") . $e->getMessage() . "\n");
    fclose($fichier);
}
