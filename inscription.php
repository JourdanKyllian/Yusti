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

<!-- Formulaire de connexion -->


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
        case '4':
            $message = 'Les mots de passe doivent contenir: Majuscule, minuscule, caractère spécial et une longueur minimale de 7 caractères.';
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
  <div class="row">
    <div class="col">
      <!-- Formulaire d'inscription -->
      <!-- <h2>Inscription</h2>
      <form action="traitement_inscription.php" method="POST">
      <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required>
        </div>
        <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse e-mail" required>
        </div>
        <div class="form-group">
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez votre mot de passe" required>
        </div>
        <div class="form-group">
            <label for="verify_mot_de_passe">Vérification du mot de passe</label>
            <input type="password" class="form-control" id="verify_mot_de_passe" name="verify_mot_de_passe" placeholder="Vérification du mot de passe" required>
        </div>
        <br>
        <div class="col text-center">
          <button type="submit" class="btn btn-primary">S'inscrire</button>
        </div>
      </form>
    </div>
</div> -->
<div class="form-container">

    <form action="traitement_inscription.php" method="POST">
      <h3>Inscris-toi maintenant !</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="pseudo" required placeholder="Entrez votre nom">
      <input type="email" name="email" required placeholder="Entrez votre email">
      <input type="password" name="password" required placeholder="Entrez votre mot de passe">
      <input type="password" name="verify_mot_de_passe" required placeholder="Confirmez votre mot de passe">
      <input type="submit" name="submit" value="Inscription" class="form-btn">
      <p>Vous avez déjà un compte ? <a href="connexion.php">Connecte-toi</a></p>
   </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>