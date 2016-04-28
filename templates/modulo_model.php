<?php

class ModuloModel {

    public $variavel;

    function __construct($variavel) {
        $this->variavel = $variavel;
    }

    function getVariavel() {
        return $this->variavel;
    }

    function setVariavel($variavel) {
        $this->variavel = $variavel;
    }

}
