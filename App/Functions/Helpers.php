<?php

namespace App\Functions;

use App\Models\Connection;

class Helpers{
    
    public static function emailValidate($email){

        $pdo = Connection::open_connection();

        $sql = "SELECT email FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();

        Connection::close_connection();

        if($stmt->rowCount() > 0){
            return false;
        }

        return true;
    }
}