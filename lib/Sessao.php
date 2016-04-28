<?php

class Sessao {
    
    function Iniciar($Usuario = 'teste') {
        $_SESSION['usuario'] = $Usuario;
    }
}