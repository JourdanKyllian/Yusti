<head>
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<?php
session_start();
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img class="bi" src="./assets/img/yustiSVG.svg" alt="" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actu.php">Actualitées</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="./discussion.php">Discussion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./boutique/index.php">Boutique</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="" action="connexion.php" method="post">
      <?php if (!isset($_SESSION['id']) && basename($_SERVER['PHP_SELF']) != 'connexion.php') { ?>
    <button class="btn btn-outline-success" type="submit">Connexion</button>
<?php } else if (isset($_SESSION['id'])) { ?>
    <div class="dropdown">
        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Votre compte
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="logout.php">Déconnexion</a>
        </div>
    </div>
<?php } ?>
      </form>
    </div>
  </div>
</nav>