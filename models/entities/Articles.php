<?php

namespace Models\Entities;

use Core\Entity;

final class Articles extends Entity
{

    private $id;
    private $libelle;
    private $stock;
    private $img;
    private $sellprice;
    private $provider;
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

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getSellprice()
    {
        return $this->sellprice;
    }

    public function setSellprice($sellprice)
    {
        $this->sellprice = $sellprice;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function setProvider($provider)
    {
        $this->provider = $provider;
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
        return $this->getId() . " " . $this->getLibelle() . " " . $this->getStock() . " " . $this->getImg() . " " . $this->getSellprice() . " " . $this->getProvider() . " " . $this->getCategory();
    }
}