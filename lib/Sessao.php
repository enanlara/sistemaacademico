<?php

class Sessao {
    
    function Iniciar($Usuario = 'teste') {
        $_SESSION['usuario'] = $Usuario;
    }
    
    function GetUsuario() {
        return $_SESSION['usuario']['nome'];
    }
    
    function GetUsuarioId() {
        return $_SESSION['usuario']['id'];
    }
}