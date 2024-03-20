<?php

class LoginController extends Controller
{
    public function index()
    {
        if (isset ($_POST["login"])) {
            if (!empty ($_POST["email"]) && !empty ($_POST["password"])) {
                $user = User::getUserByEmail($_POST["email"]);
                if (count($user) > 0) {
                    if ($user['password'] === htmlspecialchars($_POST["password"])) {
                        $_SESSION['utilisateurs'] = $user["id"];
                        $this->redirect("/");

                    } else {
                        echo "mot de passe incorret";
                    }
                } else {
                    echo "Mauvais identifiant";
                }

            } else {
                echo "Veuillez remplir les deux champs";
            }

        }
        require ("../views/login.php");
    }
}