<?php

class Router{
    
    public function start(){
        $url = $_SERVER['REQUEST_URI'];
        if($url!=="/"){
            $controller = ucfirst(explode("/",$url)[1]) . "Controller";
            if(class_exists($controller)){
                $page = new $controller();
                if(method_exists($page,"index")){
                    $page->index();
                }
                else throw new Exception("Aucune méthode index définie dans la classe $page");
            }
            else{
                http_response_code(404);
                require_once(__DIR__ . "/../views/error_404.php");
            }
        }
       
        else{
            
            $controllerObject = new MainController();
            $controllerObject->index();
        }
    }
}
