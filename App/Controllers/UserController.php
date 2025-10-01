<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    public static function login()
    {
        require_once VIEWS . "/login.php";
    }

    public static function create_account()
    {
        require_once VIEWS . "/create_account.php";
    }

    public function create_account_submit()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = new User($nome, $email, $senha);
        $dao = new UserDAO();
    }
}
