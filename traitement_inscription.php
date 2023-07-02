<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Inclusion de la connexion à la base de données
require_once 'bddconn.php';

// Récupération des données du formulaire
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];
$verify_mot_de_passe = $_POST['verify_mot_de_passe'];
$role = "Membre";

// Vérification que le pseudo et l'email ne sont pas déjà utilisés
$req = $bdd->prepare('SELECT COUNT(*) AS nb FROM membres WHERE email = :email OR pseudo = :pseudo');
$req->execute(array(
    'email' => $email,
    'pseudo' => $pseudo
));
$donnees = $req->fetch();
if ($donnees['nb'] > 0) {
    // L'email ou le pseudo est déjà utilisé
    header('Location: connexion.php?error=2');
    exit;
}

// Vérification que les deux champs de mot de passe sont identiques
if ($mot_de_passe != $verify_mot_de_passe) {
    // Les champs de mot de passe ne sont pas identiques
    header('Location: connexion.php?error=3');
    exit;
}

// Vérification du format de l'adresse email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // L'adresse email est invalide
    header('Location: connexion.php?error=1');
    exit;
}

// Vérification du mot de passe
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{7,}$/', $mot_de_passe)) {
    // Le mot de passe ne respecte pas les critères requis
    header('Location: connexion.php?error=4');
    exit;
}

// Insertion du nouvel utilisateur dans la base de données avec la date d'inscription
date_default_timezone_set('Europe/Paris');
$date_inscription = date('Y-m-d H:i:s');
$req = $bdd->prepare('INSERT INTO membres(pseudo, email, mot_de_passe, role, date_inscription) VALUES(:pseudo, :email, :mot_de_passe, :role, :date_inscription)');
$req->execute(array(
    'pseudo' => $pseudo,
    'email' => $email,
    'mot_de_passe' => password_hash($mot_de_passe, PASSWORD_DEFAULT),
    'role' => $role,
    'date_inscription' => $date_inscription
));

// Redirection vers la page de connexion
header('Location: connexion.php');
exit;
?> 