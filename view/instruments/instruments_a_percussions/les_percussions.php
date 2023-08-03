<?php
$percussions = $result['data']['percussion']
    ?>
<div class="container">
    <p>Les Instruments à Percussions sont répartis en 3 familles:
        <br>
        <?php

        foreach ($percussions as $percussion) {
            ?>
        <ul>
            <li class="new-font listnone"><a href="index.php?ctrl=Instrument&action=detailStrik&id=<?= $percussion->getId() ?>"
                    target="_blank"><?= $percussion->getName() ?></a></li>
        </ul>

        <?php
        }
        ?>
    </p>
</div>
<?php

$title = "Les Percussions";