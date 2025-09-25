<?php

namespace App\Functions;

class Helpers{

    public static function sanitaze_input($valor){
        return htmlspecialchars(stripslashes(trim($valor)));
    }
}