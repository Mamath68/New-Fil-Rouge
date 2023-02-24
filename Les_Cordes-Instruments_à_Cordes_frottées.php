<?php
include('Partiel/header.php');

echo "<title>Instruments à Cordes Frottées</title>";
?>
<br>
<div class="container">
<p>Nous allons maintant passer aux instruments à cordes frappées</p>
</div>

<caption>
    <p class="text-center caption bg-black">Les cordes frottées</p>
</caption>
<table class="table container">
    <thead>
        <!--tr = Lignes-->
        <tr class="table-dark text-center tableau">
            <!--th = Header-->
            <th scope="col">Instruments</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!--td = Cellule-->
            <td class="table-dark text-center tableau">Alto</td>
            <td class="text-center"><img src="Images/Alto.png" alt="Alto"></td>
        </tr>
        <tr>
            <td class="table-dark text-center tableau">Arpeggione</td>
            <td class="text-center"><img src="Images/Arpeggione.png" alt="Arpeggione"></td>
        </tr>
        <tr>
            <td class="table-dark text-center tableau">Contrebasse</td>
            <td class="text-center"><img src="Images/Contrebasse.png" alt="Contrebasse"></td>
        </tr>
        <tr>
            <td class="table-dark text-center tableau">Violon</td>
            <td class="text-center"><img src="Images/Violon.png" alt="Violon"></td>
        </tr>
    </tbody>
</table>

<div class="fixed">
    <?php include('Partiel/footer.php') ?>
</div>