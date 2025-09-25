<?php

spl_autoload_register(function($class){
    $dir = APP."/$class.php";

    if(file_exists($dir)){
        include $dir;
    }else{
        echo "CLASSE $class NÃO ENCONTRADA";
    }
    
});