<?php

namespace src\models;

use \core\Model;

class Log extends Model
{
    private $id;
    private $user_id;
    private $type;
    private $description;
    private $created_at;


    // getter and setter for Id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    // getter and setter for Type
    public function getType()
    {
        return $this->type;
    }
    public function setType($type): self
    {
        $this->type = $type;
        return $this;
    }

    // getter and setter for UserId
    public function getUserId()
    {
        return $this->user_id;
    }
    public function setUserId($user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }

    // getter and setter for Description
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }

    // getter and setter for CreatedAt
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function setCreatedAt($created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }
}
