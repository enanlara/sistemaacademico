<?php

class ProfessorController extends ControllerDefault
{

    public $ProfessorAdo, $ProfessorModel, $acao;

    function __construct()
    {

        $this->ProfessorAdo = new ProfessorAdo();
        $this->ProfessorModel = new ProfessorModel();

        $this->acao = (isset($_POST['acao'])) ? $_POST['acao'] : null;

        switch ($this->acao) {

            case 'salvar':

                // Caso já exista, fazer uma alteração
                if ($this->Consulta()) {

                    if ($this->Alterar()) {
                        Redirecionar('professor');
                    }

                    // Se não existir, é um novo cadastro
                } else {

                    if ($this->Cadastro()) {
                        Redirecionar('professor');
                    }
                }


                break;

            case 'excluir':
                $this->Excluir();

                break;

            case 'adicionar_disc':
                if ($this->AdicionarDisc()) {
                    Redirecionar('professor');
                }

                break;

        }

        $modo = (isset($_GET['modo'])) ? $_GET['modo'] : null;

        switch ($modo) {
            case 'consulta':
                parent::MostraView('professor_view_consulta', $this->ProfessorModel, $modo);

                break;

            // Caso seja form, mostrar o formulário
            case 'form':

                // Caso seja uma edição, fazer consulta
                if (isset($_GET['id'])) {
                    $this->Consulta();
                }

                parent::MostraView('professor_view_form', $this->ProfessorModel, $modo);

                break;

            case 'responsavel':

                $this->Consulta();

                parent::MostraView('professor_view_responsavel', $this->ProfessorModel, $modo);

                break;
        }

    }


    function Consulta()
    {
        $this->ProfessorModel = $this->ProfessorAdo->ConsultaProfessor();

        if ($this->ProfessorModel) {
            return true;
        } else {
            return false;
        }
    }

    function Cadastro()
    {

        $res = $this->ProfessorAdo->CadastraProfessor();

        if ($res) {
            return true;
        } else {
            return false;
        }

    }

    function Alterar()
    {
        $res = $this->ProfessorAdo->AlteraProfessor();

        if ($res) {
            return true;
        }
    }

    function Excluir()
    {

        $res = $this->ProfessorAdo->DeletaProfessor();

        if ($res) {
            return true;
        }

    }

    function AdicionarDisc()
    {
        
        if ($this->ProfessorAdo->AdicionarDisciplina()) {
            return true;
        }
    }
}


