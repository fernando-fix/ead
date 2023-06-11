<?php

namespace src\models;

use \core\Model;

class Lesson extends Model
{

    private $id;
    private $name;
    private $slug;
    private $order_number;
    private $module_id;
    private $course_id;
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

    // getter and setter for order_number
    public function getOrderNumber()
    {
        return $this->order_number;
    }
    public function setOrderNumber($order_number): self
    {
        $this->order_number = $order_number;
        return $this;
    }

    // getter and setter for module_id
    public function getModuleId()
    {
        return $this->module_id;
    }
    public function setModuleId($module_id): self
    {
        $this->module_id = $module_id;
        return $this;
    }

    // getter and setter for course_id
    public function getCourseId()
    {
        return $this->course_id;
    }
    public function setCourseId($course_id): self
    {
        $this->course_id = $course_id;
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
