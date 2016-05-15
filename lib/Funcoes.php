<?php

function get_head($Title) {
    global $db;

    include $_SERVER['DOCUMENT_ROOT'] . '/head.php';
}

function get_footer() {

    include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
}

function Redirecionar($modulo) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/modules/' . $modulo . '/' . $modulo . '.php?modo=consulta', true, 301);
    exit;
}

function RedirecionarJs($modulo) {
    echo "<script> location.href= 'http://" . $_SERVER['HTTP_HOST'] . "/modules/" . $modulo . "/" . $modulo . ".php'; </script>";
}

function _debug($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}