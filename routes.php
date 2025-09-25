<?php

use App\Controllers\LoginController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace("/mvc-studies", "", $url);

switch($url){
  case "/":
    LoginController::login();
    break;
    case "/create-account":
        LoginController::create_account();
        break;
}