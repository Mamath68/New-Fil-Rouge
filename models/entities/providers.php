<?php

namespace Models\Entities;

use Core\Entity;

final class Providers extends Entity
{

    private $id;
    private $name;
    private $adresse;
    private $cp;
    private $city;

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

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getName() . " " . " " . $this->getAdresse() . " " . $this->getCity() . "" . $this->getCp();
    }
}