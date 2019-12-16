<?php

//etape 1 : config database

$DB_HOST = "localhost";
$DB_NAME = "tincat";
$DB_USER = "root";
$DB_PASSWORD = "root";
// etape 2 Connexion to database

try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// etape 3 : prepare request

$req = $db->prepare("INSERT INTO users (pseudo,password) VALUES (:pseudo, :password)");
$req->bindParam(":pseudo", $_POST ["pseudo"]);
$req->bindParam(":password", $_POST ["password"] );
$req->execute();


