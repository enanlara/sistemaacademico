<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'DB.php';
require_once 'Sessao.php';

$db         = new DB();
$Sessao     = new Sessao();

$Conexao = $db->Conecta('localhost', 'academico', 'root', 'root');