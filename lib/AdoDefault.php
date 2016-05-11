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

    function GerarUpdateSql($tabela, $campo_where)
    {

        $sql = "UPDATE `{$tabela}` SET ";

        foreach ($_POST as $key => $value) {
            if ($key != 'acao' && $key != $campo_where) {
                $sql .= " `{$key}` = ?,";
                $valores[] = $value;
            }
        }

        $valores[] = $_POST[$campo_where];
        $sql = chop($sql, ',');
        $sql .= " WHERE `{$campo_where}` = ? ";

        $Retorno['sql'] = $sql;
        $Retorno['valores'] = $valores;

        return $Retorno;

    }

    function GerarDeleteSql($tabela, $campo_where)
    {
        $Retorno['sql'] = $sql = "DELETE FROM {$tabela} WHERE {$campo_where} = ?";
        $valores[] = $_POST[$campo_where];
        $Retorno['valores'] = $valores;

        return $Retorno;
    }

}