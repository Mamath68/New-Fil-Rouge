<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class PresentationManager extends Manager
{

    protected $className = "Models\Entities\Presentation";
    protected $tableName = "presentation";

    public function __construct()
    {
        parent::connect();
    }

    public function findAllInstruments()
    {
        $sql = "SELECT p.*, c.*
                FROM " . $this->tableName . " p
                INNER JOIN category c 
                ON c.id_category = p.category_id";

        return $this->getMultipleResults(
            DAO::select($sql),
            $this->className

        );
    }
    public function findInstrumentById($id)
    {
        $sql = "SELECT p.*, c.*
                FROM " . $this->tableName . " p
                INNER JOIN category c 
                ON c.id_category = p.category_id
                WHERE p.category_id = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className

        );
    }
}