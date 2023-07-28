<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class InstrumentManager extends Manager
{

    protected $className = "Models\Entities\Providers";
    protected $tableName = "providers";

    public function __construct()
    {
        parent::connect();
    }
}