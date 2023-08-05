<?php
$membraphones = $result['data']['membraphone'];
?>
<div class="container">
    <p>Il existe 3 catégories d'Instruments à Percussions :
    </p>
    <ol class="instruments">
        <li class="new-font">Les Membraphones, dont nous allons aborder le sujet sur cette page</li>
        <li class="new-font">Les Idiophones</li>
        <li class="new-font">Les électrophones</li>
    </ol>
    <br>
    <p>Un membranophone est un instrument de percussion dont les sons sont produits par la vibration d'une membrane
        tendue
        sur un cadre.
        <br>
        La membrane peut être frappée par une main comme sur un djembé, par un instrument (baguettes, balais, etc.),
        comme
        sur la caisse claire.
        <br>
        Elle peut aussi entrer en vibration par le frottement d'une tige solidaire de la peau tendue sur un fût
        résonnant
        comme la cuica (tambour à friction). Le tambour par exemple, est un membranophone
    </p>
</div>
<br>
<caption>
    <p class="container text-center fs20 text-light bg-black">Les Membraphones</p>
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
        <?php
        foreach ($membraphones as $membraphone) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $membraphone->getName() ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $membraphone->getImg() ?>" alt="<?= $membraphone->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>


</table>

<?php
$title = "Les membraphones";
?>