<?php

class DB {

    public $db, $sql, $pdo;

    function Conecta($servidor, $banco, $usuario, $senha) {
        global $pdo;

        try {
            $this->db = $banco;

            $pdo = new PDO('mysql:host=' . $servidor . ';dbname=' . $banco, $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
        } catch (PDOException $ex) {

            die('Erro ao conectar com o banco de dados, mais informações: <br><br> ' . $ex->getMessage());
        }
    }

    function GetLastInsertId() {
        global $pdo;

        return $pdo->lastInsertId();
    }

    function GetObject($sql, $valores = array()) {
        global $pdo;

        try {
            $query = $pdo->prepare($sql);

            if (count($valores) == 0) {
                $query->execute();
            } else {
                $query->execute($valores);
            }

            return $query->fetch(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return false;
        }
    }

    function ExecutaSQL($sql, $valores = array()) {
        global $pdo;

        try {
            $query = $pdo->prepare($sql);

            if (count($valores) == 0) {
                $query->execute();
            } else {
                $query->execute($valores);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();

            return false;
        }
    }

}