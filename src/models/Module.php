<?php

namespace src\models;

use \core\Model;

class Module extends Model
{

    private $id;
    private $name;
    private $slug;
    private $order_number;
    private $course_id;

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

    // getter and setter for OrderNumber
    public function getOrderNumber()
    {
        return $this->order_number;
    }
    public function setOrderNumber($order_number): self
    {
        $this->order_number = $order_number;
        return $this;
    }
}
