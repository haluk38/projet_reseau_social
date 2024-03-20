<?php

abstract class PostRepositorie extends Db {
    private static function request($request){
        $db = self::getInstance();
        return $db->query($request);
    }

    public static function getPosts(){
        return self::request("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getPostById($auteur_id){
        return self::request("SELECT * FROM posts WHERE id=$auteur_id")->fetch(PDO::FETCH_ASSOC);
    }
    public static function getPostByEmail($email){
        return self::request("SELECT * FROM posts WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }
    public static function addPost(user $user){
        return self::request("INSERT INTO posts(name, email, password) VALUES ('". $user->getName() ."', '" . $user->getEmail() . "','". $user->getPassword() ."') ");
    }
}
