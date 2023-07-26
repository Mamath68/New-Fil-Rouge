<?php

$publications = $result["data"]['publication'];
// var_dump($publications);
$comments = $result["data"]['comments'];
// var_dump($comments);

?>
<?php
/*************************************************************************************************************
                                           SI ADMINISTRATEUR
   *************************************************************************************************************/
if (Core\Session::isAdmin()) {
    /*************************************************************************************************************
                                            Publication
    *************************************************************************************************************/
    if (!empty($publications)) {
        foreach ($publications as $publication) {
            if ($publication->getImg()) {
                ?>
                <div class="versionBureau-maison form">
                    <div class="publicom">
                        <div class="card bg-primary text-center publicationComment">
                            <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                        <?= ucfirst($publication->getBody()) ?>
                                    </strong></p>
                                <p class="card-text text-center text-light"><strong>
                                        <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="versionBureau form">
                    <div class="publicom">
                        <div class="card bg-primary text-center publicationComment">
                            <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                        <?= ucfirst($publication->getBody()) ?>
                                    </strong></p>
                                <p class="card-text text-center text-light"><strong>
                                        <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portable-portrait form2">
                    <div class="main2-1">
                        <button class="openbtn2" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-portrait form2">
                    <div class="main2-1">
                        <button class="openbtn2" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-portrait form2">
                    <div class="main2">
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-portrait form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                    <div class="versionBureau form">
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                        <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                        <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="versionBureau-maison form">
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                        <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                        <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                        <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                        <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                        <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                        <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <?php
            }
        }
    } else {
        ?>
        <h2><strong>Pas de publication ici!</strong></h2>
<?php
    }
    /*************************************************************************************************************
                                                Commentaire de la publication
    *************************************************************************************************************/
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            if ($comment->getImage()) {
                ?>
            <div class="versionBureau-maison form">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="versionBureau form">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-maison-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-maison-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-maison-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-maison-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <?php
            } else {
                ?>
                <div class="versionBureau-maison form">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="versionBureau form">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        ?>
        <h2><strong>Pas de Commentaires pour cette publication!</strong></h2>
<?php
    }
    /*************************************************************************************************************
                                              SI SIMPLE UTILISATEUR
      *************************************************************************************************************/
} else if (Core\Session::getUser()) {
    /*************************************************************************************************************
                                        Publication
*************************************************************************************************************/
    if (!empty($publications)) {
        foreach ($publications as $publication) {
            if ($publication->getImg()) {
                ?>
                <div class="versionBureau-maison form">
                    <div class="publicom">
                        <div class="card bg-primary text-center publicationComment">
                            <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                    </strong></p>
                                <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="versionBureau form">
                    <div class="publicom">
                        <div class="card bg-primary text-center publicationComment">
                            <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                    </strong></p>
                                <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portable-portrait form2">
                    <div class="main2-1">
                        <button class="openbtn2" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-portrait form2">
                    <div class="main2-1">
                        <button class="openbtn2" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-portrait form2">
                    <div class="main2">
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-portrait form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-paysage form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center publicationComment">
                        <img class="card-img-top" src="public/img/<?= $publication->getImg() ?>" alt="Image publié">
                        <div class="card-body">
                            <p class="card-text text-center"><strong class="text-light">
                                <?= ucfirst($publication->getBody()) ?>
                                </strong>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                <?= $publication->getPublicationDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                    <div class="versionBureau form">
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="versionBureau-maison form">
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light">
                                    <?= ucfirst($publication->getBody()) ?>
                                    </strong>
                                </p>
                                <p class="card-text text-center text-light"><strong>
                                    <?= $publication->getPublicationDate() ?>
                                    </strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-portrait form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-paysage form2">
                        <div class="main2">
                            <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center publicationComment">
                            <div class="card-body">
                                <p class="card-text text-center"><strong class="text-light"><?= ucfirst($publication->getBody()) ?></strong>
                                </p>
                                <p class="card-text text-center text-light"><strong><?= $publication->getPublicationDate() ?></strong></p>
                            </div>
                        </div>
                    </div>
                    <?php
            }
        }
    } else {
        ?>
            <h2><strong>Pas de publication ici!</strong></h2>
<?php
    }
    /*************************************************************************************************************
                                                Commentaire de la publication
    *************************************************************************************************************/
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            if ($comment->getImage()) {
                ?>
            <div class="versionBureau-maison form">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="versionBureau form">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-maison-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-maison-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-portrait form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-maison-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="portable-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-maison-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <div class="tablette-paysage form2">
                <div class="card bg-dark text-center commentaire">
                    <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                    <div class="card-body">
                        <p class="card-text text-center text-light"><?= ucfirst($comment->getBody()) ?></p>
                        <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                    </div>
                    <div class="editdelete">
                        <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                            class="card-link btn btn-primary link-light">Répondre</a>
                        <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                    </div>
                </div>
            </div>
            <?php
            } else {
                ?>
                <div class="versionBureau-maison form">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="versionBureau form">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-portrait form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="portable-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <div class="tablette-paysage form2">
                    <div class="card bg-dark text-center commentaire">
                        <div class="card-body">
                            <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                            <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></strong></p>
                        </div>
                        <div class="editdelete">
                            <a href="index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=<?= $comment->getId() ?>"
                                class="card-link btn btn-primary link-light">Répondre</a>
                            <a href="#" class="card-link btn btn-primary link-light">Supprimer</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    } else {
        ?>
            <h2><strong>Pas de Commentaires pour cette publication!</strong></h2>
<?php
    }
}
$title = "Blog";


include_once("addComment.php");