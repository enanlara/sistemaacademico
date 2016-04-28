<?php

class LoginModel {
    
    public $email, $senha;
    
    function __construct($email = null, $senha = null) {
        $this->email = $email;
        $this->senha = $senha;
    }
    
    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


    
}