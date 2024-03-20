<?php

class MainController extends Controller{
    public function index(){
        
               $user =  User::getUser();
            
        
        
        require("../views/main.php");
    }
}