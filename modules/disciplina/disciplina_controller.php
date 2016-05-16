<?php

class DisciplinaController extends ControllerDefault
{

    public $DisciplinaAdo, $DisciplinaModel;

    function __construct()
    {
        //var_dump($_POST);
        $this->DisciplinaAdo = new DisciplinaAdo();
        $this->DisciplinaModel = new DisciplinaModel();

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
                        parent::MostraView('disciplina_view_consulta', $this->DisciplinaModel, 'consulta');

                        break;

                    case 'cadastro':
                        parent::MostraView('disciplina_view_cadastro', $this->DisciplinaModel, 'cadastro');

                        break;
                }

                break;
        }

    }

    function Consulta()
    {
        $this->DisciplinaModel = $this->DisciplinaAdo->ConsultaDisciplina();

        parent::MostraView('disciplina_view_cadastro', $this->DisciplinaModel, 'alteracao');
    }

    function Cadastro()
    {

        $res = $this->DisciplinaAdo->CadastraDisciplina();

        if ($res) {
            parent::MostraView('disciplina_view_consulta', $this->DisciplinaModel, 'consulta');
        }

    }

    function Alterar()
    {
        $res = $this->DisciplinaAdo->AlteraDisciplina();

        if ($res) {
            parent::MostraView('disciplina_view_consulta', $this->DisciplinaModel, 'consulta');
        }
    }

    function Excluir() {

        $res = $this->DisciplinaAdo->DeletaDisciplina();

        if ($res) {
            parent::MostraView('disciplina_view_consulta', $this->DisciplinaModel, 'consulta');
        }

    }

}