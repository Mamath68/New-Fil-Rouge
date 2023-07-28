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

    public function findArticlesByCategory($id)
    {
        $sql = "SELECT *
        FROM " . $this->tableName . " a
        INNER JOIN category c
        ON c.id_category = a.category_id
        WHERE c.id_category = :id
        ORDER BY a.provider_id";

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
        WHERE a.libelle LIKE '%piano%'
        ORDER BY a.provider_id";

        return $this->getMultipleResults(
            DAO::select($sql, ['libelle' => $libelle], true),
            $this->className
        );
    }
    public function findArticlesByStock($id)
    {
        $sql = "SELECT a.id_anime,a.animeName,a.img, a.histoire
        FROM " . $this->tableName . " a
        WHERE a.id_anime = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}