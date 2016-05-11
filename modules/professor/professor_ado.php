<?php

class ProfessorAdo extends AdoDefault {
    
    function CadastraProfessor() {
        global $db;
            
        $Insert = parent::GerarInsertSql('professor');
        
        return $db->ExecutaSQL($Insert['sql'], $Insert['valores']);
    }

    function AlteraProfessor() {
        global $db;

        $Update = parent::GerarUpdateSql('professor', $campo_where = 'prof_id');

        return $db->ExecutaSQL($Update['sql'], $Update['valores']);
    }

    function DeletaProfessor() {
        global $db;

        $Delete = parent::GerarDeleteSql('professor', $campo_where = 'prof_id');

        return $db->ExecutaSQL($Delete['sql'], $Delete['valores']);
    }

    function ConsultaProfessor() {
        global $db;

        $prof_id = $_POST['prof_id'];

        $sql = "SELECT * FROM professor WHERE prof_id = ?";

        $Obj = $db->GetObject($sql, array($prof_id));

        return new ProfessorModel($Obj->prof_id, $Obj->prof_nome);
    }
    
    function ListaProfessor() {
        global $db;

        return $db->GetObjectList('SELECT * FROM professor');
    }
    
}
