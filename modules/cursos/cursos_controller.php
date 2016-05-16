<?php

class CursosController extends ControllerDefault
{

    public $CursosAdo, $CursosModel;

    function __construct()
    {
        //var_dump($_POST);
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

            case 'salvar':
                $this->Cadastro();

                break;

            case 'alterar':
                $this->Alterar();

                break;

            case 'excluir':
                $this->Excluir();

                break;

            default:
                $modo = (isset($_GET['modo'])) ? $_GET['modo'] : null;

                switch ($modo) {
                    case 'consulta':
                        parent::MostraView('cursos_view_consulta', $this->CursosModel, 'consulta');

                        break;

                    case 'cadastro':
                        parent::MostraView('cursos_view_cadastro', $this->CursosModel, 'cadastro');

                        break;
                }

                break;
        }

    }

    function Consulta()
    {
        $this->CursosModel = $this->CursosAdo->ConsultaCurso();

        parent::MostraView('cursos_view_cadastro', $this->CursosModel, 'alteracao');
    }

    function Cadastro()
    {

        $res = $this->CursosAdo->CadastraCurso();

        if ($res) {
            parent::MostraView('cursos_view_consulta', $this->CursosModel, 'consulta');
        }

    }

    function Alterar()
    {
        $res = $this->CursosAdo->AlteraCurso();

        if ($res) {
            parent::MostraView('cursos_view_consulta', $this->CursosModel, 'consulta');
        }
    }

    function Excluir() {

        $res = $this->CursosAdo->DeletaCurso();

        if ($res) {
            parent::MostraView('cursos_view_consulta', $this->CursosModel, 'consulta');
        }

    }

}