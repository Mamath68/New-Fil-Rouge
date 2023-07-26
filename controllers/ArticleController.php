<?php

// Ouvre le namespace Controllers
namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;
// use Models\Managers\AnimeManager;


// class CardController hérite de la classe AbstractController et implémente ControllerInterface.
class ArticleController extends AbstractController implements ControllerInterface
{

    public function index()
    {
    
            return [
                "view" => VIEW_DIR . "home.php",
            ];

    }
    // public function findAllAnime()
    // {
        
    // }
    // public function findAnimeById($id)
    // {
        

    // }

}