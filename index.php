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

    <!-- acces css -->
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

    <?php
// Verifier si le message "message_sent" est present dans l'URL
if (isset($_GET['msg']) && $_GET['msg'] == 'message_sent') {
  // Afficher un message de confirmation
  echo '<div class="alert alert-success text-center" role="alert">Le message a bien été envoyé !</div>';
}
?>


<!-- Haut de page -->
    <section id="section1">
        <!-- YUSTI -->
        <div class="d-flex justify-content-center" style="margin-top: 100px;">
            <img src="./assets/img/bienvenue.png" alt="" class="mx-auto img-fluid">
        </div>
    </section>

    <br>
<!-- ligne -->
    <div style="margin-top: 100px;">
        <hr class="line">
    </div>

<!-- Bandeau -->
    <section class="skills">
        <h4>Consommateur & Producteur</h4>
        <h4>DE</h4>
        <!-- MUSQIUE -->
        <h3 class="title">
            <span>M</span>
            <span>U</span>
            <span>S</span>
            <span>I</span>
            <span>Q</span>
            <span>U</span>
            <span>E</span>
        </h3>
    </section>

<!-- ligne -->
    <div style="margin-bottom: 50px;">
        <hr class="line">
    </div>

<!-- text -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <h4 style="font-family: 'Aclonica', sans-serif;">Bienvenue !</h4>
                    <p style="font-family: 'Poppins', sans-serif;">Dans l'univers déjanté de notre groupe de musique peu conventionnel... Nous sommes trois zigotos complètement fous qui ont eu un coup de tête et ont décidé de se lancer dans cette incroyable aventure musicale. Notre objectif premier est de nous amuser entre nous et de laisser libre cours à notre créativité débridée. En partageant nos créations avec vous, nous espérons vous apporter un peu de légèreté et de joie. Alors, détendez-vous, ne prenez rien au sérieux et plongez dans notre élixir musical. Préparez-vous à rire, à danser et à profiter de l'expérience unique que nous avons créée pour vous !</p>
            </div>
            <div class="col-md-6">
                    <h4 style="font-family: 'Aclonica', sans-serif;">Notre approche...</h4>
                    <p style="font-family: 'Poppins', sans-serif;">Est bien différente de celle des artistes que vous connaissez. Notre groupe de musique n'est pas limité à un genre spécifique, car nous sommes en constante recherche de notre propre identité sonore. Nous vous invitons à nous rejoindre dans cette aventure exaltante où vous découvrirez une multitude de styles avec nous ! De la techno au hip-hop, en passant par le rap, le slam et bien d'autres encore, nous explorons sans relâche de nouveaux horizons musicaux. Vous serez emporté dans un tourbillon de sons éclectiques et surprenants !</p>
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-12">
                <h5 style="font-family: 'Gajraj One', cursive; text-align:center;">Préparez-vous à être étonné et à vous laisser porter par notre exploration musicale sans limites.</h5>
            </div>
        </div>
    </div>

<!-- ligne -->
    <div style="margin-bottom: 50px; margin-top: 50px;">
            <hr class="line">
    </div>

<!-- Presentation -->
    <section class="sectionTete">
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./assets/img/gabin.svg" alt="140x140">
                    <h2 class="fw-normal">Gabin</h2>
                    <p>Très polyvalent, un peu trop même ! Il touche à tout, clip, montage, mixage, prod, écriture... Je n'aurais pas assez de temps pour vous décrire ce crack des logiciels vidéo et son !</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./assets/img/kyllian.svg" alt="140x140">
                    <h2 class="fw-normal">Kyllian</h2>
                    <p>Sorti tout droit d'une autre planète et toujours la tête ailleurs, l'équipe à souvent besoins de lui et son imagination débordante, très bon danseur il s'est quand même vu refuser sa candidature à danse avec les stars !</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./assets/img/matheo.svg" alt="140x140">
                    <h2 class="fw-normal">Mathéo</h2>
                    <p>Cette énergumène est là. C'est à peu près tout... Toujours a coté pour apporter sa bonne humeur et est souvent décisif sur les choix de l'équipe !</p>
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div>
    </section>

<!-- boutton -->
    <div class="boutton d-flex justify-content-center align-items-center">
        <div style="margin-bottom: 50px;">
            <button type="button" class="btn btn-primary" onclick="location.href='./merci.php'">
                Plus d'infos
            </button>
        </div>
    </div>


<!-- ligne -->
        <div style="margin-bottom: 50px;">
            <hr class="line">
        </div>

<!-- carousel -->
    <section id="section2">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3500">
                    <img src="./assets/img/Caroussel-0.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="textCarouss">
                            <h5>Parti de rien,</h5>
                            <p>Groupe de jeunes voleurs de caddie créant tout type de son..</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="./assets/img/Caroussel-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="textCarouss">
                            <h5>Pas de sérieux, que des soirées !</h5>
                            <p>Commencé sur un coup de tete, on souhaite s'améliorer tout en s'amusant.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="./assets/img/Caroussel-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="textCarouss">
                            <h5>De la boudine pour tout le monde !</h5>
                            <p>Parce que le plus important c'est de se faire kiffer !</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Avant</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Après</span>
            </button>
        </div>
    </section>

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