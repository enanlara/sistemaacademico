<?php

class LoginController extends ControllerDefault {
    
    function __construct() {
        $LoginAdo   = new LoginAdo();
        $LoginModel = new LoginModel();
        
        $acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;
        
        switch ($acao) {
            case 'login':
                
                if($LoginAdo->Login()) {
                    
                } else {
                    
                }
                
                break;
        }
        
        parent::MostraView('login/login_view.php');
    }
    
}

