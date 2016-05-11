<?php

class CursosAdo extends AdoDefault {
    
    function CadastraCurso() {
        global $db;
        
        $Insert = parent::GerarInsertSql('cursos');
        
        return $db->ExecutaSQL($Insert['sql'], $Insert['valores']);
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
