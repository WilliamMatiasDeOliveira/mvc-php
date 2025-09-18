<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace("copia/App/", "", $url);

switch($url){
    case "/":
        echo "apresentar o form de login";
        break;
    case "/login_submit":
        echo "vc entrou no sistema";
        break;
    case "/create_account":
        echo "apresentar o form de criação de conta";
        break;
    case "/create_account_submit":
        echo "sua conta foi criada";
        break;
}