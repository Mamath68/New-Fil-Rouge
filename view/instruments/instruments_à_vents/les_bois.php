<?php
$wood = $result['data']['wood'];
?>
<div class="container">
    <p>Les bois sont une famille d'instruments de musique à vent qui se caractérisent par leur système d'émission du son
        constitué :
        <br>
    <ul>
        <li class="new-font">soit par un biseau vers lequel l'air peut être canalisé comme la flûte à bec ou librement
            dirigé par le
            musicien
            comme la quena ou la flûte traversière,</li>
        <li class="new-font">soit par la vibration d'une anche libre comme l'accordéon ou l'harmonica, d'une anche
            simple battante comme
            la
            clarinette ou le saxophone ou d'une anche double comme le basson ou le hautbois.</li>
    </ul>
    </p>
</div>

<caption>
    <p class="text-center container fs20 text-light bg-black">Les Bois</p>
</caption>
<table class="table container">
    <thead>
        <tr class="table-dark text-center tableau">
            <th scope="col">Instruments</th>
            <th scope="col">Type d'instrument</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($wood)) {
            foreach ($wood as $bois) {
                ?>
                <tr>
                    <td class="text-center tableau">
                        <?= $bois->getName() ?>
                    </td>
                    <td class="text-center tableau">
                        <?= $bois->getType() ?>
                    </td>
                    <td class="text-center"><img src="./../public/img/<?= $bois->getImg() ?>" alt="<?= $bois->getName() ?>">
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <h2>Pas d'instruments ici!</h2>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
$title = "Les Bois";
?>