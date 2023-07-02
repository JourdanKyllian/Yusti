<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Rediriger vers la page d'accueil
exit();
?>
