<?php

class CadastroController extends ControllerDefault {
    
    public $CadastroAdo, $CadastroModel;
    
    function __construct() {
        $this->CadastroAdo   = new CadastroAdo();
        $this->CadastroModel = new CadastroModel();
        
        $acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;
        
        switch ($acao) {
            case '':
                
                break;
        }
        
        parent::MostraView($view, $Title);
    }
}