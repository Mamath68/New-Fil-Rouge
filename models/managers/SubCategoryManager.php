<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class SubCategoryManager extends Manager
{

    protected $className = "Models\Entities\SubCategory";
    protected $tableName = "subcategory";

    public function __construct()
    {
        parent::connect();
    }


    public function findSubcategoryById($id)
    {
        $sql = "SELECT c.id_category, sc.id_subcategory, sc.name
        FROM " . $this->tableName . " sc
        INNER JOIN category c 
        ON c.id_category = sc.category_id
        WHERE c.id_category = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}