<?php

class ControllerDefault {

    function __construct() {
        
    }

    function MostraView($modulo, $Model = null, $tipo = null) {

        if ($tipo != null) {
            include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $modulo . '/' . $modulo . '_view_' . $tipo . '.php';
        } else {
            include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $modulo . '/' . $modulo . '_view.php';
        }

    }

}