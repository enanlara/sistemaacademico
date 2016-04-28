<?php

class LoginController extends ControllerDefault {
    
    function __construct() {
        $LoginAdo   = new LoginAdo();
        $LoginModel = new LoginModel();
        
        $acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;
        
        switch ($acao) {
            case 'login':
                
                if($LoginAdo->Login()) {
                    // redirecionar para home
                } else {
                    // mostrar mensagem de erro
                }
                
                break;
        }
        
        parent::MostraView('login/login_view.php');
        
        // abaixo disso ficarão os métodos adicionais, caso tenha
    }
    
}

