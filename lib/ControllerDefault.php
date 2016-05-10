<?php

class ControllerDefault {

    function __construct() {
        
    }

    function MostraView($modulo, $Model = null, $acao = null) {

            include $modulo . '.php';

    }

}