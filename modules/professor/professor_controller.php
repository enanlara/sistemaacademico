<?php

class ProfessorController extends ControllerDefault
{

    public $ProfessorAdo, $ProfessorModel, $acao;

    function __construct()
    {
        //var_dump($_POST);
        $this->ProfessorAdo = new ProfessorAdo();
        $this->ProfessorModel = new ProfessorModel();

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

            case 'adicionar_disc':
                $this->Consulta();

                break;

            default:
                $modo = (isset($_GET['modo'])) ? $_GET['modo'] : null;

                switch ($modo) {
                    case 'consulta':
                        parent::MostraView('professor_view_consulta', $this->ProfessorModel, 'consulta');

                        break;

                    case 'cadastro':
                        parent::MostraView('professor_view_cadastro', $this->ProfessorModel, 'cadastro');

                        break;

                    case 'responsavel':
                        parent::MostraView('professor_view_consulta', $this->ProfessorModel, 'adicionar_disc');
                }

                break;
        }

        parent::MostraView('professor_view_consulta', $this->ProfessorModel, $this->acao);

    }

    function Consulta()
    {
        $this->ProfessorModel = $this->ProfessorAdo->ConsultaProfessor();


    }

    function Cadastro()
    {

        $res = $this->ProfessorAdo->CadastraProfessor();

        if ($res) {
            parent::MostraView('professor_view_consulta', $this->ProfessorModel, 'consulta');
        }

    }

    function Alterar()
    {
        $res = $this->ProfessorAdo->AlteraProfessor();

        if ($res) {
            parent::MostraView('professor_view_consulta', $this->ProfessorModel, 'consulta');
        }
    }

    function Excluir() {

        $res = $this->ProfessorAdo->DeletaProfessor();

        if ($res) {
            parent::MostraView('professor_view_consulta', $this->ProfessorModel, 'consulta');
        }

    }



}