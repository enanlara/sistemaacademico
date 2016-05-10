<?php

class CursosController extends ControllerDefault
{

    public $CursosAdo, $CursosModel;

    function __construct()
    {
        $this->CursosAdo = new CursosAdo();
        $this->CursosModel = new CursosModel();

        //$acao = (isset($_GET['acao'])) ? $_GET['acao'] : $_POST['acao'];

        if (isset($_POST['acao'])) {
            $acao = $_POST['acao'];
        } else {
            $acao = null;
        }

        switch ($acao) {
            case 'consulta':
                $this->Consulta();

                break;

            case 'cadastrar':
                $this->Cadastro();

                break;

            default:
                $modo = (isset($_GET['modo'])) ? $_GET['modo'] : null;

                switch ($modo) {
                    case 'consulta':
                        parent::MostraView('cursos', $this->CursosModel, 'consulta');

                        break;

                    case 'cadastro':
                        parent::MostraView('cursos', $this->CursosModel, 'cadastro');

                        break;
                }

                break;
        }

    }

    function Consulta()
    {
        $this->CursosModel = $this->CursosAdo->ConsultaCurso();

        parent::MostraView('cursos', $this->CursosModel, 'cadastro');
    }

    function Cadastro() {
        
//        $this->CursosAdo->

    }

}