<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\UserManager;
use Models\Managers\PublicationManager;
use Models\Managers\CommentManager;
use Models\Managers\ReponseManager;

// use Models\Managers\MessageManager;


class SocialNetworkController extends AbstractController implements ControllerInterface
{

    public function index()
    {

        return [
            "view" => VIEW_DIR . "home.php",

        ];

    }
    public function findPublicationsByUsers($id)
    {
        $publicationManager = new PublicationManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/publicationByUsers.php",
            "data" => [
                "publications" => $publicationManager->findPublicationsByUser($id, ["id_publication", "ASC"]),
            ]
        ];
    }
    public function addPublication($id)
    {
        if (!empty($_POST)) {

            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $user = Session::getUser()->getId();

            if ($body) {
                $publicationManager = new PublicationManager();

                $publication = !$publicationManager->add(
                    [
                        "body" => $body,
                        "img" => $img,
                        "user_id" => $user,
                    ]
                );
            }
            header('Location:index.php?ctrl=socialnetwork&action=findAllPublications');
        }
        return
            [
                "view" => VIEW_DIR . "socialNetwork/listPublication.php",
                "data" =>
                [
                    "publication" => $publication,
                ]
            ];
    }

    public function findAllPublications()
    {
        $publicationManager = new PublicationManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/listPublication.php",
            "data" => [
                "publications" => $publicationManager->findAllPublications(["id_publication", "ASC"]),
            ]
        ];
    }

    public function addComment()
    {
        $publicationManager = new PublicationManager();
        $id = $_GET['id'];
        if (!empty($_POST)) {
            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $image = filter_input(INPUT_POST, "image", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $user = Session::getUser()->getId();
            if ($body) {
                $commentManager = new CommentManager();
                if (
                    !$commentManager->add(
                        [
                            "body" => $body,
                            "image" => $image,
                            "user_id" => $user,
                            "publication_id" => $id,
                        ]
                    )
                )
                    ;
            }
            header('Location:index.php?ctrl=socialnetwork&action=viewCommentByPublication&id=' . $id . '');
        }
        return
            [
                "view" => VIEW_DIR . "socialNetwork/viewComment.php",
                "data" =>
                [
                    "comment" => $commentManager->findOneById($id)
                ]
            ];
    }
    public function viewCommentByPublication($id)
    {
        $publicationManager = new PublicationManager();
        $commentManager = new CommentManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/viewComment.php",
            "data" => [
                "publication" => $publicationManager->findOneById($id),
                "comments" => $commentManager->findCommentByPublication($id),
            ]
        ];
    }

    public function replyTheComment()
    {
        $commentManager = new CommentManager();
        $id = $_GET['id'];
        if (!empty($_POST)) {
            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $user = Session::getUser()->getId();
            if ($body) {
                $reponseManager = new ReponseManager();
                if (
                    !$reponseManager->add(
                        [
                            "body" => $body,
                            "img" => $img,
                            "user_id" => $user,
                            "comment_id" => $id,
                        ]
                    )
                )
                    ;
            }
            $this->redirectTo("socialNetwork", "viewCommentsByComment", $id);
            // header('Location:index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=' . $id . '');
        }
        return
            [
                "view" => VIEW_DIR . "socialNetwork/commentToTheComment.php",
                "data" =>
                [
                    "reponses" => $reponseManager->findOneById($id)
                ]
            ];
    }
    public function viewCommentsByComment($id)
    {

        $commentManager = new CommentManager();
        $reponseManager = new ReponseManager();

        return [
            "view" => VIEW_DIR . "socialNetwork/commentToTheComment.php",
            "data" => [
                "comment" => $commentManager->findOneById($id),
                "reponses" => $reponseManager->findCommentsByComment($id)
            ]
        ];
    }
    // public function deleteAnswer($id)
    // {
    //     $reponse = $_GET['id'];
    //     $reponse = new reponseManager();
    //     $commentManager = new CommentManager();
    //     $commentManager->findOneById($commentManager);
    //     $reponse->delete($id);

    //     header('Location:index.php?ctrl=socialnetwork&action=viewCommentsByComment&id=' . $id . '');

    // }

}