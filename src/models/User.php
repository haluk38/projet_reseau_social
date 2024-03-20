<?php

class User extends UserRepositorie{

    private $id ;
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password,$id = null){
        $this->id = $id;
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    // Accesseurs et mutateurs
    public function getId(){return $this->id;}
    public function setName($name){
        if(preg_match("/^[A-z]+$/", $name))
        $this->name = htmlspecialchars($name);
        else
            throw new Exception("Mauvais username");
        }
    public function getName(){return $this->name;}

    public function setEmail($email){
        if(preg_match("/^[A-zÀ-ÿ0-9\._\-]*@[a-z]*\.[a-z]{2,5}$/", $email))
        $this->email = htmlspecialchars($email);
        else
            throw new Exception("Mauvais email");
    }
    public function getEmail(){return $this->email;}

    public function setPassword($password){
        if(preg_match("/^[A-z0-9\-\!]{3,}$/", $password))
        $this->password = htmlspecialchars($password);
        else
            throw new Exception("Mauvais password");
    }
    public function getPassword(){return $this->password;}

}