<?php
$presentations = $result["data"]["presentation"];
?>
<div class="container">
    <h2>Les types d'instruments</h2>
    <p>Il existe différents Instruments de Musique, ils sont classés en 3 Familles.</p>
    <br>
    <p>Ces familles sont : </p>
</div>

<table class="table">
    <?php
    foreach ($presentations as $presentation) {
        ?>
        <tr>
            <td>
                <li class="new-font listnone"><a href="index.php?ctrl=instrument&action=detailCategory&id=<?=$presentation->getId()?>" target="_blank">
                        <?= $presentation->getCategory()->getLibelle() ?>
                    </a></li>
            </td>
            <td> <img src="public/img/<?= $presentation->getImg() ?>" alt="Instrument">
            </td>
        </tr>

        <?php
    }
    ?>
</table>

<?php
$title = "Présentation"
    ?>