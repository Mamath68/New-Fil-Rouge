<?php
$mecaniques = $result['data']['mecanique'];
?>
<div class="container">
    <p>Les instruments de musique mécanique permettent de jouer la musique contenue sur un support. Celui-ci peut être
        de nombreuses natures, en voici les principales :</p>
    <ul>
        <li class="new-font">Bande de papier ou de carton perforé, essentiellement utilisée pour les grands orgues
            limonaires et les
            orgues de Barbarie car la longueur du morceau peut être importante;</li>
        <li class="new-font">Cylindre comportant des picots, utilisé dans les pianos mécaniques, les serinettes, les
            boites à musique et
            les cartels et carillons;</li>
        <li class="new-font">Disque embossé, perforé, pressé, utilisé dans une grande diversité d'instruments ou
            appareils, allant du
            Polyphon au Gramophone.</li>
    </ul>
    <p>Désormais, les instruments mécaniques peuvent emprunter la technique MIDI (Musical Instrument Digital Interface)
        et
        restituer directement depuis un support électronique.</p>
</div>
<br>
<caption>
    <p class="container text-center fs20 text-light bg-black">Les Mécaniques</p>
</caption>
<table class="table container">
    <thead>
        <tr class="table-dark text-center tableau">
            <th scope="col">Instruments</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($mecaniques as $mecanique) {
            ?>
            <tr>
                <td class="text-center tableau">
                    <?= $mecanique->getName() ?>
                </td>
                <td class="text-center"><img src="public/img/<?= $mecanique->getImg() ?>" alt="<?= $mecanique->getName() ?>">
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
$title = "Les Mécaniques";
?>