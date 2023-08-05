<?php
$frappes = $result['data']['frappe'];
?>
<div class="container">
    <p>Nous allons maintant passer aux instruments à cordes frappées</p>
    <br>
    <p> Ils seront classé selon les 4 continent, a savoir:
    <ol class="instruments">
        <li class="new-font listnone">Afrique</li>
        <li class="new-font listnone">Amérique</li>
        <li class="new-font listnone">Asie</li>
        <li class="new-font listnone">Europe</li>
    </ol>
    </p>
</div>
<br>
<caption>
    <p class="container text-center fs20 text-light bg-black">Les cordes frappées</p>
</caption>

<table class="table container">
    <!--th = Header-->
    <thead>
        <tr class="table-dark text-center tableau">
            <th scope="col">Instruments</th>
            <th scope="col">Continents</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($frappes as $frappe) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $frappe->getName() ?>
                </td>
                <td class="text-center tableau">
                    <?php
                    if ($frappe->getType()) {
                        echo $frappe->getType();
                    } else {
                        echo "Pas d'informations supplémentaires";
                    }
                    ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $frappe->getImg() ?>"
                        alt="<?= $frappe->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>


</table>

<?php
$title = "Les Cordes Frappées"
    ?>