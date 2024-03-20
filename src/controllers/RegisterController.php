<?php

class RegisterController extends Controller{
    public function index(){
        try {
            if (isset($_POST["valider"])) {
                $user = new User($_POST["name"],$_POST["email"],$_POST["password"]);
                User::addUser($user);
                $this->redirect("/login");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        require("../views/register.php");
    }
}