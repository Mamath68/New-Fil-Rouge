<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Lien vers le bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!--Lien vers la page CSS-->
    <link rel="stylesheet" href="Style.css">
</head>
<!--Lien vers le logo d'onglet-->
<link rel="icon" href="Images/clé-de-sol.png">
<!--bannière-->
<div class="encadrer_texte"><a href="Index.php">BURNHAUPT MUSIQUE</a></div>
<!--Menu déroulant-->
<main>
    <!--nav = navigation-->
    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
        <!-- enveloppe conteneur -->
        <div class="container-fluid">
            <!-- bouton alternatif -->
            <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- menu pliable -->
            <div class="collapse navbar-collapse" id="navbarExampleOnHover">
                <!-- lien de gauche -->
                <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
                    <!-- Navigation déroulant -->
                    <li class="nav-item dropdown dropdown-hover position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Présentation
                        </a>
                        <!-- déroulement du menu -->
                        <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
                            border-top-right-radius: 0;
                          ">
                            <!--container : conteneur-->
                            <div class="container">
                                <!--class colonne-->
                                <div class="row my-3">
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <!--classe liste-->
                                        <div class="list-group list-group-flush">
                                            <!--a href : lien vers les pages; target="_blank" = ouvre un nouvel onglet-->
                                            <a href="Les_vents-Les_bois.php" target="_blank"
                                                class="list-group-item list-group-item-action">Les bois</a>
                                            <a href="Les_vents-Les_Cuivres.php" target="_blank"
                                                class="list-group-item list-group-item-action">Les Cuivres</a>
                                            <a href="Les_vents-Les_instruments_mécaniques.php" target="_blank"
                                                class="list-group-item list-group-item-action">Les instruments
                                                mécaniques</a>
                                            <a href="Les_vents-Les_instrument_électronique.php" target="_blank"
                                                class="list-group-item list-group-item-action">Les instruments
                                                électronique</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <a href="Les_Cordes-Instruments-à-Cordes_pincées.php" target="_blank"
                                                class="list-group-item list-group-item-action">Cordes pincées</a>
                                            <a href="Les_Cordes-Instruments_à_Cordes_frappées.php" target="_blank"
                                                class="list-group-item list-group-item-action">Cordes frappées</a>
                                            <a href="Les_Cordes-Instruments_à_Cordes_frottées.php" target="_blank"
                                                class="list-group-item list-group-item-action">Cordes frottées</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                        <div class="list-group list-group-flush">
                                            <a href="Les_Percussions-Les_Membraphones.php" target="_blank"
                                                class="list-group-item list-group-item-action">Les Membraphones</a>
                                            <a href="Les_Percussions-Les_Idiophones.php" target="_blank"
                                                class="list-group-item list-group-item-action">Les Idiophones</a>
                                            <a href="Les_Percussions-Les_électrophones.php" target="_blank"
                                                class="list-group-item list-group-item-action">Les électrophones</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- lien de gauche -->
            </div>
            <!-- enveloppe pliable -->
        </div>
        <!-- enveloppe conteneur -->
        <div class="container-fluid">
            <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarExampleOnHover">

                <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">

                    <li class="nav-item dropdown dropdown-hover position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>

                        <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
                            border-top-right-radius: 0;
                          ">

                            <div class="container">
                                <div class="row my-3">
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <a href="Achats.php" target="_blank"
                                                class="list-group-item list-group-item-action">Achats</a>
                                            <a href="Contact.php" target="_blank"
                                                class="list-group-item list-group-item-action">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>

    </nav>
</main>