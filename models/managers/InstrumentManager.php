<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class InstrumentManager extends Manager
{

    protected $className = "Models\Entities\Instruments";
    protected $tableName = "instruments";

    public function __construct()
    {
        parent::connect();
    }


    public function findInstrumentById($id)
    {
        $sql = "SELECT i.id_instruments, i.name, i.img, c.id_category, c.libelle, sc.id_subCategory, sc.name
        FROM " . $this->tableName . " i
        INNER JOIN category c 
        ON c.id_category = i.category_id
        INNER JOIN subcategory sc 
        ON sc.id_subCategory = i.subcategory_id
        WHERE i.subcategory_id = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}