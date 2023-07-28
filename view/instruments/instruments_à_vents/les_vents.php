<?php
$wind = $result['data']['wind']
    ?>
<div class="container">
    <p>Les Instruments à vents sont répartis en 4 familles:
        <br>
        <?php

        foreach ($wind as $vent) {
            ?>
        <ol>
            <li class="new-font"><a href="index.php?ctrl=instrument&action=detailwind&id<?= $vent->getId() ?>"
                    target="_blank"><?= $vent->getName() ?></a></li>
        </ol>

        <?php
        }
        ?>
    </p>
</div>

<?php

$title = "Les Vents";