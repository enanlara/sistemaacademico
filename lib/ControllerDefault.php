<?php

class ControllerDefault {

    function __construct() {
        
    }

    function MostraView($modulo, $HomeModel = null) {
        include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $modulo . '/' . $modulo . '_view.php';
    }

}