<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class ArticleManager extends Manager
{

    protected $className = "Models\Entities\Articles";
    protected $tableName = "articles";

    public function __construct()
    {
        parent::connect();
    }

    public function findArticle()
    {
        $sql = "SELECT  a.articles_id, a.libelle, a.img, a.stock, a.sellprice, p.id_provider, p.name
        FROM " . $this->tableName . " a
        INNER JOIN category c 
        ON c.id_category = a.category_id
        INNER JOIN providers p 
        ON p.id_provider = a.provider_id";

        return $this->getMultipleResults(
            DAO::select($sql),
            $this->className
        );
    }
    public function findArticlesByCategory($id)
    {
        $sql = "SELECT *
        FROM " . $this->tableName . " a
        INNER JOIN category c
        ON c.id_category = a.category_id
        WHERE c.id_category = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
    public function findArticlesByLibelle($libelle)
    {
        $sql = "SELECT *
        FROM " . $this->tableName . " a
        INNER JOIN category c
        ON c.id_category = a.category_id
        WHERE a.libelle LIKE :libelle";

        return $this->getMultipleResults(
            DAO::select($sql, ['libelle' => $libelle], true),
            $this->className
        );
    }
    // public function findArticlesByStock($id)
    // {
    //     $sql = "SELECT *
    //     FROM " . $this->tableName . " a
    //     WHERE a.id_anime = :id";

    //     return $this->getMultipleResults(
    //         DAO::select($sql, ['id' => $id], true),
    //         $this->className
    //     );
    // }
}