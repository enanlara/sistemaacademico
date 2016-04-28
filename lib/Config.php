<?php

require_once 'DB.php';
require_once 'Sessao.php';

$DB         = new DB();
$Sessao     = new Sessao();

$DB->Conecta('localhost', '', 'root', '');