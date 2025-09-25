<?php

namespace App\Controllers;

use App\Functions\Connection;
use App\Functions\Helpers;

class LoginController
{

    public static function login()
    {

        require_once VIEWS . "login.php";

        if ($_POST) {
            // 
        }
    }

    public static function create_account()
    {

        session_start();

        if ($_POST) {

            $nome = Helpers::sanitaze_input($_POST['nome']);
            $email = Helpers::sanitaze_input($_POST['email']);
            $senha = Helpers::sanitaze_input($_POST['senha']);

            // verificar se existe campos vazios
            $erros = [];

            if (empty($nome)) {
                $erros['nome'] = "O campo nome é obrigatório";
            }
            if (empty($email)) {
                $erros['email'] = "O campo E-mail é obrigatório";
            }
            if (empty($senha)) {
                $erros['senha'] = "O campo senha é obrigatório";
            }
            if (!empty($erros)) {
                $_SESSION['erros'] = $erros;
                header("Location:/mvc-studies/create-account");
                exit;
            }

            // abre a conexão
            $conn = new Connection();
            $pdo = $conn->pdo;

            $sql = "SELECT email FROM usuarios WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":email", $email);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $_SESSION['erros']['email'] = "Este E-mail já existe !";
                header("Location:/mvc-studies/create-account");
                exit;
            }

        } else {
            require_once VIEWS . "create-account.php";
        }
    }
}
