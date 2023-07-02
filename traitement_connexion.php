<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclusion de la connexion à la base de données
require_once 'bddconn.php';

// Récupération des données du formulaire
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Vérification que l'utilisateur existe dans la base de données
$req = $bdd->prepare('SELECT id, pseudo, mot_de_passe, role FROM membres WHERE email = :email');
$req->execute(array(
    'email' => $email
));
$donnees = $req->fetch();
if (!$donnees) {
    // L'utilisateur n'existe pas
    header('Location: connexion.php?error=1');
    exit;
}

// Vérification du format de l'adresse email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // L'adresse email est invalide
    header('Location: connexion.php?error=4');
    exit;
}

// Vérification du mot de passe
if (!password_verify($mot_de_passe, $donnees['mot_de_passe'])) {
    // Le mot de passe est incorrect
    header('Location: connexion.php?error=1');
    exit;
}

// Ouverture de la session
session_start();
$_SESSION['id'] = $donnees['id'];
$_SESSION['pseudo'] = $donnees['pseudo'];
$_SESSION['email'] = $email;
$_SESSION['role'] = $donnees['role'];

// Redirection vers la page d'accueil
header('Location: index.php');
exit;

?>
