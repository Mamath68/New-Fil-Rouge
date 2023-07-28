<div class="container">
    <p>Les bois sont une famille d'instruments de musique à vent qui se caractérisent par leur système d'émission du son
        constitué :
        <br>
    <ol>
        <li class="new-font">soit par un biseau vers lequel l'air peut être canalisé comme la flûte à bec ou librement
            dirigé par le
            musicien
            comme la quena ou la flûte traversière,</li>
        <li class="new-font">soit par la vibration d'une anche libre comme l'accordéon ou l'harmonica, d'une anche
            simple battante comme
            la
            clarinette ou le saxophone ou d'une anche double comme le basson ou le hautbois.</li>
    </ol>
    </p>
</div>
<caption>
    <p class="text-center caption bg-black">Les bois</p>
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
        foreach ($variable as $key => $value) {
            ?>
            <tr>
                <td class="table-dark text-center tableau">
                    <? ?>
                </td>
                <td class="table-dark text-center tableau">
                    <? ?>
                </td>
                <td class="text-center"><img src="public/img/<? ?>" alt="<? ?>"></td>
            </tr>
            <?php
        }
        ?>

    </tbody>
</table>

<?php
$title = "Les Bois";
?>