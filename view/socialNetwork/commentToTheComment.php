<?php

$comments = $result["data"]['comment'];
$reponses = $result["data"]['reponses'];

?>
<?php
/*************************************************************************************************************
                                           SI ADMINISTRATEUR
   *************************************************************************************************************/
if (Core\Session::isAdmin()) {
    /*************************************************************************************************************
                                            Commentaire
    *************************************************************************************************************/
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            if ($comment->getImage()) {
                ?>
                <div class="versionBureau-maison form">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="versionBureau form">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-portrait form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-portrait form2">
                    <div class="main2">
                        <button class="openbtn" onclick="openNav()">☰ Ouvrire le menu</button>
                    </div>
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-portrait form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-portrait form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/<?= $comment->getImage() ?>" alt="Image commenté">
                        <div class="card-body">
                            <p class="card-text text-center text-light">
                                <?= ucfirst($comment->getBody()) ?>
                            </p>
                            <p class="card-text text-center text-light"><strong>
                                    <?= $comment->getCommentDate() ?>
                                </strong></p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                    <div class="versionBureau-maison form">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="versionBureau form">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-portrait form2">
                        <div class="main2-1">
                            <button class="openbtn2" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-portrait form2">
                        <div class="main2-1">
                            <button class="openbtn2" onclick="openNav()">☰ Ouvrire le menu</button>
                        </div>
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-portrait form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-portrait form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
            }
        }
    } else {
        echo "<h2><strong>Pas de Commentaires pour cette publication!</strong></h2>";
    }

    /*************************************************************************************************************
                                            Réponses du Commentaire
    *************************************************************************************************************/
    if (!empty($reponses)) {
        foreach ($reponses as $reponse) {
            if ($reponse->getImg()) {
                ?>
                        <div class="versionBureau-maison form">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="versionBureau form">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-maison-portrait form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-portrait form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-maison-paysage form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-paysage form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-maison-portrait form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-portrait form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-maison-paysage form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-paysage form2">
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row ligne g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light">
                                                <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                        <div class="editdelete">
                                            <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                            <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                                class="card-link btn btn-primary link-light">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
            } else {
                ?>
                            <div class="versionBureau-maison form">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="versionBureau form">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-maison-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-maison-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-maison-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-maison-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="editdelete">
                                        <a href="#" class="card-link btn btn-primary link-light">Répondre</a>
                                        <a href="index.php?ctrl=socialNetwork&action=deleteAnswer&id=<?= $reponse->getId() ?>"
                                            class="card-link btn btn-primary link-light">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            <?php
            }

        }
    } else {
        ?>
        <h2><strong>Pas de Réponse à ce commentaire!</strong></h2>";
<?php
    }

    /*************************************************************************************************************
                                           SI SIMPLE UTILISATEUR
   *************************************************************************************************************/
} else if (Core\Session::getUser()) {
    if (!empty($comments)) {
        foreach ($comments as $comment) {
            if ($comment->getImage()) {
                ?>
                <div class="versionBureau-maison form">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="versionBureau form">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-portrait form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-portrait form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-maison-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="portable-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-portrait form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-portrait form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-maison-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <div class="tablette-paysage form2">
                    <div class="card bg-primary text-center commentaireReponse">
                        <img class="card-img-top" src="public/img/' . $comment->getImage() . '" alt="Image commenté"> 
                        <div class="card-body">
                            <p class="card-text text-center text-light">' . ucfirst($comment->getBody()) . '</p>
                            <p class="card-text text-center text-light"><strong>' . $comment->getCommentDate() . '
                            </strong></p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                    <div class="versionBureau-maison form">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="versionBureau form">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-portrait form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-portrait form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-maison-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="portable-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-portrait form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-portrait form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-maison-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <div class="tablette-paysage form2">
                        <div class="card bg-primary text-center commentaireReponse">
                            <div class="card-body">
                                <p class="card-text text-center text-light"><strong><?= ucfirst($comment->getBody()) ?></strong></p>
                                <p class="card-text text-center text-light"><strong><?= $comment->getCommentDate() ?></stong></p>
                            </div>
                        </div>
                    </div>
                    <?php
            }
        }
    } else {
        echo "<h2><strong>Pas de Commentaires pour cette publication!</strong></h2>";
    }

    /*************************************************************************************************************
                                            Réponses du Commentaire
    *************************************************************************************************************/
    if (!empty($reponses)) {
        foreach ($reponses as $reponse) {
            if ($reponse->getImg()) {
                ?>
                        <div class="versionBureau-maison form">  
                            <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="versionBureau form">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-maison-portrait form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-maison-paysage form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-portrait form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portable-paysage form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-maison-portrait form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-portrait form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-maison-paysage form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tablette-paysage form2">  
                        <div class="card mb-5 bg-dark text-light reponse">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="public/img/<?= $reponse->getImg() ?>" class="img-fluid rounded-start" alt="Image commentaire">
                                    </div>
                                    <div class="col-md-7 commentsize">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light  "><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center text-light  ">
                                            <small class="text-body-light"><?= $reponse->getReponseDate() ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
            } else {
                ?>
                            <div class="versionBureau-maison form">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="versionBureau form">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-maison-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-maison-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portable-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-maison-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-portrait form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-maison-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tablette-paysage form2">
                                <div class="card mb-5 bg-dark text-light reponse2">
                                    <div class="col-md-2">
                                        <div class="card-body">
                                            <p class="card-text text-center text-light"><?= ucfirst($reponse->getBody()) ?></p>
                                            <p class="card-text text-center "><small class="text-body-light"><?= $reponse->getReponseDate() ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
            }
        }
    } else {
        ?>
            <h2><strong>Pas de Réponse à ce commentaire!</strong></h2>";
    <?php
    }
}
$title = "Blog";

include_once("addAnswer.php");