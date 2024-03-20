<?php

abstract class UserRepositorie extends Db {

    private static function request($request){
        $db = self::getInstance();
        return $db->query($request);
    }

    public static function getUser(){
        return self::request("SELECT * FROM utilisateurs")->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getUserById($id){
        return self::request("SELECT * FROM utilisateurs WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }
    public static function getUserByEmail($email){
        return self::request("SELECT * FROM utilisateurs WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }
    public static function addUser(user $user){
        return self::request("INSERT INTO utilisateurs(name, email, password) VALUES ('". $user->getName() ."', '" . $user->getEmail() . "','". $user->getPassword() ."') ");
    }
}


