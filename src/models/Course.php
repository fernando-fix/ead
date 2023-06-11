<?php

namespace src\models;

use \core\Model;

class Course extends Model
{

    private $id;
    private $name;
    private $slug;
    private $logo;
    private $url;


    // getter and setter for id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    // getter and setter for name
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    // getter and setter for slug
    public function getSlug()
    {
        return $this->slug;
    }
    public function setSlug($slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    // getter and setter for logo
    public function getLogo()
    {
        return $this->logo;
    }
    public function setLogo($logo): self
    {
        $this->logo = $logo;
        return $this;
    }

    // getter and setter for url
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url): self
    {
        $this->url = $url;
        return $this;
    }
}
