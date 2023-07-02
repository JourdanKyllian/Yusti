<?php
$host = 'localhost'; // nom de l'hôte
$dbname = 'u270881727_yusti'; // nom de la base de données
$username = 'u270881727_yusti'; // nom d'utilisateur MySQL
$password = '7]r5zA\'uQhQ8[eg'; // mot de passe MySQL
date_default_timezone_set('Europe/Paris');

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // configuration des options de PDO
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    // en cas d'erreur, on affiche un message et on arrête l'exécution
    die('Connexion échouée : ' . $e->getMessage());
}
?>
