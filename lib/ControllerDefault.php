<?php

class ControllerDefault {

    function __construct() {
        
    }

    function MostraView($modulo, $Model = null, $modo = null) {

            include $modulo . '.php';

    }

}