<?php

namespace App\DAO;

use PDO;
use PDOException;

abstract class Connection{

    protected PDO $conn;
    public function __construct(){
        try {
            $this->conn = new PDO(
                "mysql:host=".HOST.
                ";dbname=".DBNAME.
                ";charset=utf8mb4",
                USER,
                PASS,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => true
                )
                
            );
        } catch (PDOException $e) {
            die("Erro na conexão "). $e->getMessage();
        }
    }
}