<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <!-- Framework Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <!-- accès css -->
  <link rel="stylesheet" href="./assets/styles/style.css">
  <link rel="stylesheet" href="./assets/styles/header.css">
  <link rel="stylesheet" href="./assets/styles/footer.css">

</head>

<body>
  <!-- nav -->
  <header>
    <?php
    include_once("header.php")
    ?>
  </header>

  <!-- first text -->
  <div class=" text-center">
    <img class="d-block mx-auto mb-4" src="./assets/img/yustiSVG.svg" alt="" width="124" height="124">
    <h1 class="display-5 fw-bold">Contactez-nous</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Envoyez-nous rapidement vos questions, vos idées, problèmes/bug ou autres avec ce formulaire !</p>
    </div>
  </div>

  <!-- contact -->
  <div class="container">
    <div class=" text-center">
      <!-- <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Adresse e-mail</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="votreAdresse@mail.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Décrivez ici votre demande/problème"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button> -->
      <h1 class="display-5 fw-Roboto">Le portugais du web travaille actuellement sur un système d'envoi de mail simple !</h1>
    </div>
  </div>


  <!-- ligne -->
  <div style="margin-top: 50px;">
    <div style="margin-bottom: 50px;">
      <hr class="line">
    </div>
  </div>

  <!-- text -->
  <div class="container text-center">
    <div class="row row-cols-1">
      <div class="col" class="padtxt">Vous pouvez aussi envoyer un mail vous-même à l'adresse ci-contre : contact@yusti.fr</div>
      <div class="col" class="padtxt">Soyez toujours polis ! Bonjour, s'il vous plaît, merci... Des humains vous répondront :) </div>
    </div>
  </div>
  <br>

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