<?php

namespace App\Models;

use PDO;
use PDOException;

class Connection
{
    
    public static function open_connection()
    {
        try {
            $pdo = new PDO(
                "mysql:host=" . HOST .
                    ";dbname=" . DBNAME,
                USER,
                PASS,
                array(PDO::ATTR_PERSISTENT => true)
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            throw new PDOException("erro na conexão");
        }
    }

    public static function close_connection(){
        $pdo = null;
    }
}
