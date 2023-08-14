<?php
// Modèle de code de connexion à la base de données

// Fichier à renommer en tant que "cnx.php"

$dsn  = 'mysql:host=XXXXXX; dbname=XXXXX; charset=utf8';
$user = 'XXXXXX';
$pass = 'XXXXXX';

try {
    $cnx = new PDO($dsn, $user, $pass);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
} catch (PDOexception $e) {
    echo 'Une erreur est survenue !';
}
