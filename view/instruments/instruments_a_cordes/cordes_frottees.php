<?php
$frottes = $result['data']['frotte'];
?>
<div class="container">
    <p>Nous allons maintant passer aux instruments à cordes frappées</p>
</div>

<caption>
    <p class="text-center container fs20 text-light bg-black">Les cordes frottées</p>
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
        foreach ($frottes as $frotte) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $frotte->getName() ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $frotte->getImg() ?>" alt="<?= $frotte->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
$title = "Les Cordes Frottées";
?>