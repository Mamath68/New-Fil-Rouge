<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/f0dc5fab26.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- Bootstrap JS -->
    <link rel="stylesheet" href="public/CSS/maison.css">
    <link rel="stylesheet" href="public/CSS/smartphone-maison.css">
    <link rel="stylesheet" href="public/CSS/tablette-maison.css">
    <!-- <link rel="stylesheet" href="public/CSS/elan.css"> -->
    <!-- <link rel="stylesheet" href="public/CSS/smartphone.css"> -->
    <!-- <link rel="stylesheet" href="public/CSS/tablette.css"> -->
    <link rel="stylesheet" href="public/tarteaucitron/css/tarteaucitron.css">
    <script src="public/tarteaucitron/tarteaucitron.js"></script>
    <link rel="icon" href="public/img/clé-de-sol.png">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?ctrl=home&action=index">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php?ctrl=Instrument&action=presentation">Présentation</a>
                        <a class="nav-link" href="#">Achat</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?= $contenu ?>
        <?php include_once("Contact/comment_button.php") ?>
        <a href="#" class="go_top">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </main>

    <footer class="text-center text-white" style="">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section class="">
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3"> © 2023 Copyright: Burnaupt Musique - Nouvelle version</span>
                </p>
            </section>
            <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 footer">

            <a class="text-white" href="index.php?ctrl=home&action=about" target="_blank">A
                Propos</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="public/js/script.js"></script>
    <script src="public/js/tarteaucitron.js"></script>
    <script src="public/tarteaucitron/advertising.js"></script>
    <script src="public/tarteaucitron/tarteaucitron.services.js"></script>
    <script src="public/tarteaucitron/lang/tarteaucitron.de.js"></script>
</body>

</html>