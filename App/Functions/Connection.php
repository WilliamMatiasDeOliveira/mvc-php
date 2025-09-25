<?php

namespace App\Functions;

use PDO;
use PDOException;

class Connection
{

    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . HOST .
                    ";dbname=".DBNAME.
                    ";charset=utf8",
                    USER,
                    PASS,
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_PERSISTENT => true
                        )
            );


        } catch (PDOException $e) {
            throw new PDOException("ERRO NA CONEXÃO ". $e->getMessage());
        }
    }

    public function close_connection(){
        $this->pdo = null;
    }
}
