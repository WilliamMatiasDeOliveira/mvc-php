<?php

namespace App\Controllers;

class LoginController{

    public static function create_account_submit(){

        session_start();

        $_SESSION['old'] = $_POST;
        
        if($_POST['nome'] == ""){
            $_SESSION['empty_nome'] = "Este campo é obrigatório";
            // header("Location: /copia/App/create-account");
        }
        if($_POST['email'] == ""){
            $_SESSION['empty_email'] = "Este campo é obrigatório";
            // header("Location: /copia/App/create-account");
        }
        if($_POST['senha'] == ""){
            $_SESSION['empty_senha'] = "Este campo é obrigatório";
            // header("Location: /copia/App/create-account");
        }

        if (isset($_SESSION['empty_nome']) || isset($_SESSION['empty_email']) || isset($_SESSION['empty_senha'])) {
            header("Location: /copia/App/create-account");
            exit;
        }

        unset($_SESSION['old']);
    }
}