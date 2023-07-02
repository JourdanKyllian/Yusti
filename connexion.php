<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>Yustification</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link href="./assets/styles/log.css" rel="stylesheet">
</head>

<body>

<?php include 'header.php' ?>

  <div class="container">
    <?php
    // Vérification si l'erreur est définie dans l'URL
    if (isset($_GET['error'])) {
        // Affichage du message d'erreur approprié en fonction de la valeur de $_GET['error']
        switch ($_GET['error']) {
            case '1':
                $message = 'L\'adresse e-mail ou le mot de passe est faux.';
                break;
            case '2':
                $message = 'L\'adresse e-mail ou le pseudo est déjà utilisée.';
                break;
            case '3':
                $message = 'Les mots de passe ne correspondent pas.';
                break;
            default:
                $message = 'Une erreur s\'est produite lors de la connexion.';
                break;
        }
        // Affichage du message d'erreur
        echo '<div class="alert alert-danger">' . $message . '</div>';
    }

    if(isset($_GET['msg'])){
        switch($_GET['msg']){
          case 'not_logged_in':
              $message = 'Vous devez vous connecter pour envoyer un message.';
              break;
          default: 
              $message = 'Une erreur s\'est produite...';
              break;
        }
        echo '<div class="alert alert-danger">' . $message . '</div>';
    }
    ?>
  </div>
  <div class="form-container">
    <form action="traitement_connexion.php" method="post">
      <h3>Connectez-vous maintenant</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
      <input type="email" name="email" required placeholder="Entrez votre email">
      <input type="password" name="password" required placeholder="Entrez votre mot de passe">
      <input type="submit" name="submit" value="Connexion" class="form-btn">
      <p>Vous n'avez pas de compte ? <a href="inscription.php">inscris-toi</a></p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>