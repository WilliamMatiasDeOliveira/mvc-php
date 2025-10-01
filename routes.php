<?php

use App\Controllers\MainController;
use App\Controllers\UserController;

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = str_replace("/meu_pet_sumiu", "", $route);

switch ($route) {
    case "/":
        MainController::home();
        break;
    case "/login":
        UserController::login();
        break;
    case "/create_account":
        UserController::create_account();
        break;
    case "/create_account_submit":

}
