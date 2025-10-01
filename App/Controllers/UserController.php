<?php

namespace App\Controllers;

use App\DAO\UserDAO;
use App\Functions\Helpers;
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

    public static function create_account_submit()
    {
        session_start();
        $nome = Helpers::sanitaze_input($_POST['nome']);
        $email = Helpers::sanitaze_input($_POST['email']);
        $senha = Helpers::sanitaze_input($_POST['senha']);

        $error = [];

        if (empty($nome)) {
            $error['nome'] = "O campo nome é obrigatório !";
        }
        if (empty($email)) {
            $error['email'] = "O campo email é obrigatório !";
        }
        if (empty($senha)) {
            $error['senha'] = "O campo senha é obrigatório !";
        }

        if (!empty($error)) {
            $_SESSION['error'] = $error;
            header("Location: /meu_pet_sumiu/create_account");
        }

        $user = new User();
        $user->setNome($nome);
        $user->setEmail($email);
        $user->setSenha($senha);

        $user_dao = new UserDAO();
        $user_dao->teste();

    }
}
