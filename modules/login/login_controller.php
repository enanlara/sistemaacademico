<?php

class LoginController extends ControllerDefault {

    public $LoginAdo, $LoginModel;

    function __construct() {
        global $Sessao;

        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $this->LoginAdo = new LoginAdo();
        $this->LoginModel = new LoginModel();

        $acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;

        switch ($acao) {
            case 'login':

                if ($this->LoginAdo->Login()) {
                    $Sessao->Iniciar();

                    Redirecionar('home');
                } else {
                    // mostrar mensagem de erro
                }

                break;
        }

        parent::MostraView('login');
    }

}