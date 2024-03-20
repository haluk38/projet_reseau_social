<?php

session_start();
// require once appeler une fois pour eviter d'etre appeler sur d'autre fichier 
require_once("../src/models/Db.php"); 
require_once("../src/models/repositories/UserRepositories.php");
require_once("../src/models/repositories/PostRepositorie.php");
require_once("../src/models/User.php");
require_once("../src/models/Post.php");
require_once("../src/controllers/Controller.php");
require_once("../src/controllers/LoginController.php");
require_once("../src/controllers/MainController.php");
require_once("../src/controllers/RegisterController.php");
require_once("../core/Router.php");

try{

   $app = new Router();
   $app->start();
}
catch(PDOException | Exception $e){
    die($e->getMessage());
}
 