<?php

class ModuloModel {

    public $estu_matricula;
    public $estu_nome;

    function __construct($estu_matricula, $estu_nome) {
        $this->estu_matricula = $estu_matricula;
        $this->estu_nome = $estu_nome;
    }

    function getEstu_matricula() {
        return $this->estu_matricula;
    }

    function getEstu_nome() {
        return $this->estu_nome;
    }

    function setEstu_matricula($estu_matricula) {
        $this->estu_matricula = $estu_matricula;
    }

    function setEstu_nome($estu_nome) {
        $this->estu_nome = $estu_nome;
    }



}
