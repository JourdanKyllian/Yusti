<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yusti</title>
    <link rel="icon" href="./assets/img/logoico.png">
    <!-- Framework Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- accès css -->
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/header.css">
    <link rel="stylesheet" href="./assets/styles/footer.css">

</head>

<body>
    <header>
        <?php
        include_once("header.php")
        ?>
    </header>


<!-- Button trigger modal -->
<?php
// Vérifier si l'utilisateur est connecté et s'il a le rôle "Admin"
if (isset($_SESSION['role']) && $_SESSION['role'] == 'Admin') {
  // Afficher le bouton
  echo '
    <div class="d-flex justify-content-center">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chatModal">
        Ouvrir le chat en direct
      </button>
    </div>
  ';
}
  
?>



<!-- Modal -->
<div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chatModalLabel">Envoyer un message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="envoyer_message.php">
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
          </div>
          <input type="hidden" name="pseudo" value="<?php echo $_SESSION['pseudo']; ?>">
          <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- footer -->
    <?php
    include_once("footer.php")
    ?>

    <!-- Framework Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- acces js -->
    <script src="./assets/js/index.js"></script>

</body>

</html>