<?php

class HomeController extends ControllerDefault {
    
    public $HomeAdo, $HomeModel;
    
    function __construct() {
        $this->HomeAdo   = new HomeAdo();
        $this->HomeModel = new HomeModel();
        
        $acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;
        
        switch ($acao) {
            case '':
                
                break;
        }
        
        parent::MostraView('home', $this->HomeModel);
    }
}