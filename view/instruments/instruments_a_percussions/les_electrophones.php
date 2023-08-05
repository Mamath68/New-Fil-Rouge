<?php
$electrophones = $result['data']['electrophone'];
?>
<caption>
    <p class="container text-center fs20 text-light bg-black">Les Électrophones</p>
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
        foreach ($electrophones as $electrophone) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $electrophone->getName() ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $electrophone->getImg() ?>"
                        alt="<?= $electrophone->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
$title = "Les Électrophones";
?>