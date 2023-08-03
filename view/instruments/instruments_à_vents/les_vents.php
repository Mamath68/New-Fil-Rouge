<?php
$wind = $result['data']['wind']
    ?>
<div class="container">
    <p>Les Instruments à vents sont répartis en 4 familles:
        <br>
        <?php

        foreach ($wind as $vent) {
            ?>
        <ul>
            <li class="new-font listnone"><a href="index.php?ctrl=Instrument&action=detailwind&id=<?= $vent->getId() ?>"
                    target="_blank"><?= $vent->getName() ?></a></li>
        </ul>

        <?php
        }
        ?>
    </p>
</div>

<?php

$title = "Les Vents";