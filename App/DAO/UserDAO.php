<?php

namespace App\DAO;

class UserDAO extends Connection{

   public function __construct()
   {
    parent::__construct();
   }

   public function teste(){
    if($this->conn){
        echo "conexão chegou no dao";
    } else {
        echo "Não tem conexão";
    }
   }
    
}