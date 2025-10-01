<?php

namespace App\DAO;

use PDO;
use PDOException;

class Connection{
    protected $conn;

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

    public function getConnection(){
        return $this->conn;
    }

    public function closeConnection(){
        $this->conn = null;
    }
}