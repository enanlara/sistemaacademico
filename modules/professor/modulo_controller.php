<?php

class ModuloController extends ControllerDefault {
    
    public $ModuloAdo, $ModuloModel;
    
    function __construct() {
        $this->ModuloAdo   = new ModuloAdo();
        $this->ModuloModel = new ModuloModel();
        
        $acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;
        
        switch ($acao) {
            case '':
                
                break;
        }
        
        parent::MostraView($view, $Title);
    }
}