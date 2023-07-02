<?php
session_start();
require_once("bddconn.php");

// Définir le fuseau horaire à Paris
date_default_timezone_set('Europe/Paris');

// Obtenir l'heure actuelle de Paris
$date = new DateTime();

if (isset($_SESSION['id'])) {
  // Récupérer l'ID de l'utilisateur connecté
  $author_id = $_SESSION['id'];

  // Récupérer le message envoyé
  $message = $_POST['message'];

  // Préparer la requête SQL d'insertion du message
  $query = "INSERT INTO chat_admin (message, author_id, timestamp) VALUES (?, ?, ?)";
  $stmt = $bdd->prepare($query);
  $stmt->bindParam(1, $message);
  $stmt->bindParam(2, $author_id);
  $stmt->bindParam(3, $date->format('Y-m-d H:i:s'));
  $stmt->execute();

  // Rediriger vers la page d'accueil avec un message de confirmation
  header("Location: actu.php?msg=message_sent");
  exit();
} else {
  // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion avec un message d'erreur
  header("Location: connexion.php?msg=not_logged_in");
  exit();
}
?>
