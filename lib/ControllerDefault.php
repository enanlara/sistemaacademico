<?php

class ControllerDefault {

    function __construct() {
        
    }

    function MostraView($view) {
        include $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $view;
    }

}
