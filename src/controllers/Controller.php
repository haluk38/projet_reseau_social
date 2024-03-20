<?php

abstract class Controller{
    public function redirect($path){
        header("location:$path");
        exit();
    }
    abstract public function index();
}
