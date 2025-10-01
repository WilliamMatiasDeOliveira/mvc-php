<?php

namespace App\Models;

class User
{

    public function __construct(
        private string $nome = "",
        private string $email = "",
        private string $senha = ""
    ) {}

    // getters
    public function getNome() {
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }

    // setters
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }
    public function setEmail($novoEmail){
        $this->email = $novoEmail;
    }
    public function setSenha($novaSenha){
        // $this->senha = $novaSenha;
        $this->senha = password_hash($novaSenha, PASSWORD_DEFAULT);
    }
}
