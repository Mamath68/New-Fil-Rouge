<?php
include('Partiel/header.php');

echo "<title>Burnhaupt Musique</title>";
?>

<ol class="container text-center bg-dark">
    <img src="Images/bongo.png">
    <img src="Images/flutte.png">
    <img src="Images/guitares.png">
</ol>


<div class="container">
    <h2>Les types d'instruments</h2>
    <p>Il existe différents Instruments de Musique, ils sont classés en 3 catégories.</p>
    <br>
    <p>Ces catégories sont : </p>
</div>
<!--text-primary = couleurs bleu pour le text-->
<ol class="container text-center text-primary">
    <!--class="new-font" = nouvelle police d'écriture-->
    <li class="new-font">Les instruments à vents</li>
    <li class="new-font">Les instruments à cordes</li>
    <li class="new-font">Les instruments à percussions</li>
</ol>
<br>
<div class="container">
    <p> Ces catégories sont elles-mêmes séparés en plusieurs sous-classes que nous vous présenterons dans les pages
        suivantes.</p>
</div>

<div class="fixed-bottom">
    <?php include('Partiel/footer.php') ?>
</div>