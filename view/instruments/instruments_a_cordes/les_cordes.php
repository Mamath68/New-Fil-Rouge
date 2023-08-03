<?php
$cordes = $result['data']['corde']
    ?>
<div class="container">
    <p>Les Instruments à Cordes sont répartis en 3 familles:
        <br>
        <?php

        foreach ($cordes as $corde) {
            ?>
        <ul>
            <li class="new-font listnone"><a href="index.php?ctrl=Instrument&action=detailCord&id=<?= $corde->getId() ?>"
                    target="_blank"><?= $corde->getName() ?></a></li>
        </ul>

        <?php
        }
        ?>
    </p>
</div>

<?php

$title = "Les Cordes";