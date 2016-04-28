<?php

function get_head($Title) {
    global $db;

    include $_SERVER['DOCUMENT_ROOT'] . '/head.php';
}

function get_footer() {

    include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
}

function Redirecionar($modulo) {
    header('Location: ' . $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $modulo . '/' . $modulo . '.php');
}