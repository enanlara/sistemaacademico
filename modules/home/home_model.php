<?php

class HomeModel {

    public $variavel;

    function __construct($variavel = null) {
        $this->variavel = $variavel;
    }

    function getVariavel() {
        return $this->variavel;
    }

    function setVariavel($variavel) {
        $this->variavel = $variavel;
    }

}
