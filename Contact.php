<?php
include('Partiel/header.php');

echo "<title> Nous Contacter</title>";
?>
<style>
    body {
        background-color: black;
    }
</style>

<div class="container">
    <div class="list-group-item text-center h-100 p-5 bg-info p-3">
        <!--formspree = lien vers le serveur de messagerie-->
        <!--formulaire de contact-->
        <form action="https://formspree.io/f/mayklvlp" method="POST">
            <h1 class="text-primary">Contactez Nous!</h1>
            <br>
            <label class="list-group-item h-100 p-5">
                <input type="email" name="email" placeholder="E-mail">
            </label>
            <br>
            <label class="list-group-item h-100 p-5">
                <textarea name="message" placeholder="Message"></textarea>
            </label>
            <br>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</div>

<div class="fixed-bottom">
    <?php include('Partiel/footer.php') ?>
</div>