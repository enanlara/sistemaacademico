<?php

/**
 * Created by PhpStorm.
 * User: matheushf
 * Date: 5/10/16
 * Time: 8:46 PM
 */
class AdoDefault
{
    function GerarInsertSql($tabela)
    {

        $sql = "INSERT INTO {$tabela} values (";

        foreach ($_POST as $key => $value) {

            if ($key != 'acao') {
                $sql .= '?,';
                $valores[] = $value;
            }
        }

        $sql = chop($sql, ',');
        $sql .= ")";

        $Retorno['sql'] = $sql;
        $Retorno['valores'] = $valores;

        return $Retorno;
    }

}