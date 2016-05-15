<?php

class ProfessorAdo extends AdoDefault
{


    function CadastraProfessor()
    {
        global $db;

        $Insert = parent::GerarInsertSql('professor');

        return $db->ExecutaSQL($Insert['sql'], $Insert['valores']);
    }

    function AlteraProfessor()
    {
        global $db;

        $Update = parent::GerarUpdateSql('professor', $campo_where = 'prof_id');

        return $db->ExecutaSQL($Update['sql'], $Update['valores']);
    }

    function DeletaProfessor()
    {
        global $db;

        $Delete = parent::GerarDeleteSql('professor', $campo_where = 'prof_id');

        return $db->ExecutaSQL($Delete['sql'], $Delete['valores']);
    }

    function ConsultaProfessor()
    {
        global $db;
        $this->prof_id = (isset($_POST['prof_id'])) ? $_POST['prof_id'] : $_GET['id'];

        $sql = "SELECT * FROM professor WHERE prof_id = ?";
        $Obj = $db->GetObject($sql, array($this->prof_id));

        if ($Obj) {
            return new ProfessorModel($Obj->prof_id, $Obj->prof_nome);
        } else {
            return false;
        }
    }

    function ListaProfessor()
    {
        global $db;

        return $db->GetObjectList('SELECT * FROM professor');
    }

    function AdicionarDisciplina()
    {
        global $db;

        $sql = "INSERT INTO responsavel (respo_disciplinas_disc_codigo, respo_prof_id) VALUES (?,?)";

        foreach ($_POST['prof_disc'] as $disciplinas) {
            $db->ExecutaSQL($sql, array($disciplinas, $this->prof_id));
        }

        return true;
    }

}
