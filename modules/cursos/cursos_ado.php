<?php

class CursosAdo extends AdoDefault {
    
    function CadastraCurso() {
        global $db;
        
        $Insert = parent::GerarInsertSql('cursos');
        
        return $db->ExecutaSQL($Insert['sql'], $Insert['valores']);
    }

    function AlteraCurso() {
        global $db;

        $Update = parent::GerarUpdateSql('cursos', $campo_where = 'curs_id');

        return $db->ExecutaSQL($Update['sql'], $Update['valores']);
    }

    function DeletaCurso() {
        global $db;

        $Delete = parent::GerarDeleteSql('cursos', $campo_where = 'curs_id');

        return $db->ExecutaSQL($Delete['sql'], $Delete['valores']);
    }

    function ConsultaCurso() {
        global $db;

        $curs_id = $_POST['curs_id'];

        $sql = "SELECT * FROM cursos WHERE curs_id = ?";

        $Obj = $db->GetObject($sql, array($curs_id));

        return new CursosModel($Obj->curs_id, $Obj->curs_nome);
    }
    
    function ListaCursos() {
        global $db;

        return $db->GetObjectList('SELECT * FROM cursos');
    }
    
}
