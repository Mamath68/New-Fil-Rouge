<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
use Models\Managers\ArticleManager;

class ArticleController extends AbstractController implements ControllerInterface
{

    public function index()
    {

        return [
            "view" => VIEW_DIR . "home.php",
        ];

    }
    public function findAllArticle()
    {
        $articleManager = new ArticleManager();

        return [
            "view" => VIEW_DIR . "Achats.php",
            "data" => [
                "articles" => $articleManager->findArticle(),
            ]
        ];
    }
    public function findByCategory($id)
    {
        $articleManager = new ArticleManager();

        return [
            "view" => VIEW_DIR . "Achats.php",
            "data" => [
                "category" => $articleManager->findArticlesByCategory($id),
            ]
        ];
    }

}