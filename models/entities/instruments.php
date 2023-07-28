<?php

namespace Models\Entities;

use Core\Entity;

final class Instruments extends Entity
{

    private $id;
    private $name;
    private $img;
    private $category;

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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImage($img)
    {
        $this->img = $img;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getName() . " " . $this->getImg() . " " . $this->getCategory();
    }
}