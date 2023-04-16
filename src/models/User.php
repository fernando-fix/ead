<?php

namespace src\models;

use \core\Model;

class User extends Model
{

    private $id;
    private $name;
    private $password;
    private $email;
    private $cpf;
    private $phone;
    private $avatar = "default.jpg";
    private $token;

    // getter and setter para id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    // getter and setter para name
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = ucwords(trim($name));

        return $this;
    }

    // getter and setter para password
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    // getter and setter para email
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    // getter and setter para cpf
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    // getter and setter para phone
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    // getter and setter para avatar
    public function getAvatar()
    {
        return $this->avatar;
    }
    public function setAvatar($url)
    {
        $this->avatar = $url;
    }

    // getter and setter para token
    public function getToken()
    {
        return $this->token;
    }
    public function setToken($url)
    {
        $this->token = $url;
    }
}