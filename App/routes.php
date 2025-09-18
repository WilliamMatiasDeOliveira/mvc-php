<?php

use App\Controllers\LoginController;
use App\Controllers\MainController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace("copia/App/", "", $url);

switch($url){
    case "/":
        MainController::login();
        break;
    case "/create-account":
        MainController::create_account();
        break;
    case "/create_account_submit":
        LoginController::create_account_submit();
        break;
    case "/home":
        echo "pagina home";
        break;

}