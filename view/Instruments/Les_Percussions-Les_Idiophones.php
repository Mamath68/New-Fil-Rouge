<?php
include('Partiel/header.php');

echo "<title>Instruments à Percussions - Les idiophones</title>";
?>
<br>
<div class="container">
    <p>Les idiophones sont classé en plusieurs catégories :
    <ol class="instruments">
        <li class="new-font">Les Xilophones</li>
        <li class="new-font">Les Métalophones</li>
        <li class="new-font">Les idiophones à 1 note</li>
    </ol>
    </p>
</div>
<br>
<caption>
    <p class="text-center caption bg-black">Les idiophones</p>
</caption>
<table class="table container">
    <thead>
        <!--tr = Lignes-->
        <tr class="table-dark text-center tableau">
            <!--th = Header-->
            <th scope="col">Instruments</th>
            <th scope="col">Type d'instrument</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!--td = Cellule-->
            <td class="table-dark text-center tableau">Marimba</td>
            <td class="table-dark text-center tableau">Xilophones</td>
            <td class="text-center"><img src="Images/Marimba.png" alt="Marimba"></td>
        </tr>
        <tr>
            <td class="table-dark text-center tableau">Glockenspiel</td>
            <td class="table-dark text-center tableau"> Métalophones</td>
            <td class="text-center"><img src="Images/Glockenspiel.png" alt="Glockenspiel"></td>
        </tr>
        <tr>
            <td class="table-dark text-center tableau">Handpan</td>
            <td class="table-dark text-center tableau">Metalophone</td>
            <td class="text-center"><img src="Images/handpan.png" alt="Handpan"></td>
        </tr>
        <tr>
            <td class="table-dark text-center tableau">Gong</td>
            <td class="table-dark text-center tableau">idiophones à 1 note</td>
            <td colspan="2" class="text-center"><img src="Images/Gong.png" alt="Gong"></td>
        </tr>
    </tbody>

</table>

<?php 
$title = "Les idiophones";
?>