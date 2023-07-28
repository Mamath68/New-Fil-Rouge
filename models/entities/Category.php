<?php

namespace Models\Entities;

use Core\Entity;

final class Category extends Entity
{

    private $id;
    private $libelle;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getLibelle();
    }

}