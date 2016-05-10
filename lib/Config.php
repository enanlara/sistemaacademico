<?php

require_once 'DB.php';
require_once 'Sessao.php';

$db         = new DB();
$Sessao     = new Sessao();

$db->Conecta('localhost', 'academico', 'root', 'root');