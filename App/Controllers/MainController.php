<?php

namespace App\Controllers;

class MainController{

    public static function login(){
        require_once VIEWS."/login.php";
    }

    public static function create_account(){
        require_once VIEWS."/create-account.php";
    }
}