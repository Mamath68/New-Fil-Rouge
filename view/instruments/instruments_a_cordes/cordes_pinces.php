<?php
$pinces = $result['data']['pince'];
?>

<div class="container">
    <p>Il existe 3 catégorie d'Instruments à cordes :
    <ol class="instruments">
        <li class="new-font">Les cordes pincées, dont nous allons aborder le sujet sur cette page</li>
        <li class="new-font">Les cordes frappées</li>
        <li class="new-font">Les cordes frottées</li>
    </ol>
    </p>
</div>
<br>
<caption>
    <p class="container text-center fs20 text-light bg-black">Les cordes pincées</p>
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
        <?php
        foreach ($pinces as $pince) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $pince->getName() ?>
                </td>
                <td class="text-center tableau">
                    <?php
                    if ($pince->getType()) {
                        echo $pince->getType();
                    } else {
                        echo "Aucun Type";
                    }
                    ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $pince->getImg() ?>" alt="<?= $pince->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
$title = "Les Cordes Pincées";
?>