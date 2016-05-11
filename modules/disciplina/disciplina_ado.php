<?php

class DisciplinaAdo extends AdoDefault {
    
    function CadastraDisciplina() {
        global $db;
            
        $Insert = parent::GerarInsertSql('disciplina');
        
        return $db->ExecutaSQL($Insert['sql'], $Insert['valores']);
    }

    function AlteraDisciplina() {
        global $db;

        $Update = parent::GerarUpdateSql('disciplina', $campo_where = 'disc_id');

        return $db->ExecutaSQL($Update['sql'], $Update['valores']);
    }

    function DeletaDisciplina() {
        global $db;

        $Delete = parent::GerarDeleteSql('disciplina', $campo_where = 'disc_id');

        return $db->ExecutaSQL($Delete['sql'], $Delete['valores']);
    }

    function ConsultaDisciplina() {
        global $db;

        var_dump($_POST);
        $disc_id = $_POST['disc_id'];

        $sql = "SELECT * FROM disciplina WHERE disc_id = ?";

        $Obj = $db->GetObject($sql, array($disc_id));

        return new DisciplinaModel($Obj->disc_id, $Obj->disc_nome);
    }
    
    function ListaDisciplina() {
        global $db;

        return $db->GetObjectList('SELECT * FROM disciplina');
    }
    
}
