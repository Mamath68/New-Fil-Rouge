<?php
$idiophones = $result['data']['idiophone'];
?>
<div class="container">
    <p>Les idiophones sont classé en plusieurs catégories :
    <ol class="instruments">
        <li class="new-font">Les Xilophones</li>
        <li class="new-font">Les Métalophones</li>
        <li class="new-font">Les Idiophones à 1 note</li>
    </ol>
    </p>
</div>
<br>
<caption>
    <p class="container text-center fs20 text-light bg-black">Les idiophones</p>
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
        foreach ($idiophones as $idiophone) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $idiophone->getName() ?>
                </td>
                <td class="text-center tableau">
                    <?php
                    if ($idiophone->getType()) {
                        echo $idiophone->getType();
                    } else {
                        echo "Pas d'informations supplémentaires";
                    }
                    ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $idiophone->getImg() ?>" alt="<?= $idiophone->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>

</table>

<?php
$title = "Les idiophones";
?>