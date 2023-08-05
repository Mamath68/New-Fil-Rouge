<?php
$electroniques = $result['data']['electronique'];
?>
<div class="container">
    <p>Les Instruments à vents électronique, utilisant le souffle et les doigtés d'instruments à vent.</p>
    <br>
    <p>Un Electronic Wind Instrument (ou EWI) est un contrôleur à vent électronique inventé par Nyle Steiner dans les
        années 1970.</p>
    <br>
    <p>L'EWI possède un bec équipé de capteurs de pression d'air (contrôle du volume) et de pression des lèvres
        (vibrato). Les clefs ne se déplacent pas, la détection des doigtés se fait par conductivité <br>(détection de la
        position des doigts par courant électrique), ce qui permet de jouer très rapidement.</p>
    <p>L'octave est choisie parmi sept en positionnant le pouce gauche sur un ensemble de rouleaux. Le capteur de
        pression d'air permet une grande
        étendue dynamique, en particulier en combinaison avec un synthétiseur analogique.</p>
    <p>Le contrôleur à vent indique
        les notes à jouer à un synthétiseur intégré ou externe, il est possible de le connecter à une station de travail
        numérique afin de produire une plus grande variété de sons. Cet instrument a été utilisé tout particulièrement
        par les musiciens smooth jazz.</p>
    <br>
    <p>Le dernier modèle en date, produit par akai <a href="https://www.akaipro.com/products/ewi-series"
            target="_blank">(Pour plus
            d'informations sur les différents produits de l'entreprise)</a> fut le EWI solo sortie en septembre 2020.
    </p>
</div>
<br>
<caption>
    <p class="container text-center fs20 text-light bg-black">Les Électroniques</p>
</caption>
<table class="table container">
    <thead>
        <tr class="table-dark text-center tableau">
            <th scope="col">Instruments</th>
            <th scope="col">Informations Supplémentaires</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($electroniques as $electronique) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $electronique->getName() ?>
                </td>
                <td class="text-center tableau">
                    <?php 
                    if ($electronique->getType()) {
                       echo $electronique->getType();
                    } else{
                        echo "Pas d'informations supplémentaires";
                    }
                    ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $electronique->getImg() ?>" alt="<?= $electronique->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
$title = "Les Électroniques";
?>