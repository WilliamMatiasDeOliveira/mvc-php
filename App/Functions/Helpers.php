<?php

namespace App\Functions;

class Helpers{

    public static function sanitaze_input($value){
        return htmlspecialchars(trim(addslashes($value)));
    }
}