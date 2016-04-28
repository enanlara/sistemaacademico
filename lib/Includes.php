<?php
session_start();
set_include_path($_SERVER['DOCUMENT_ROOT'] . '/lib/');

require_once 'ControllerDefault.php';
require_once 'Config.php';
require_once 'Funcoes.php';

function RequireMVC($module) {
    require_once $module . '_ado.php';
    require_once $module . '_controller.php';
    require_once $module . '_model.php';
}