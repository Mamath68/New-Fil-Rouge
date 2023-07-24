<?php

namespace Models\Entities;

use Core\Entity;

final class Publication extends Entity
{

    private $id;
    private $body;
    private \DateTime $publicationDate;
    private $userId;
    private $img;

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

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getPublicationDate()
    {
        return $this->publicationDate->format("d/m/Y à H:i");
    }

    public function setPublicationDate($date)
    {
        $this->publicationDate = new \DateTime($date);
        return $this;
    }

    public function getUserID()
    {
        return $this->userId;
    }

    public function setUserID($userId)
    {
        $this->userId = $userId;
    }
    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }
    public function __toString()
    {
        return $this->getId() . " " . $this->getBody() . " " . $this->getUserId() . " " . $this->getImg() . " " . $this->getPublicationDate();
    }
}