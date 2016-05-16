<?php

class DisciplinaModel {

    public $disc_id, $disc_nome, $disc_ementa;
    
    public function __construct($disc_id = null, $disc_nome = null, $disc_ementa = null)
    {
        $this->disc_id = $disc_id;
        $this->disc_nome = $disc_nome;
        $this->disc_ementa = $disc_ementa;
    }

    /**
     * @return mixed
     */
    public function getDiscEmenta()
    {
        return $this->disc_ementa;
    }

    /**
     * @param mixed $disc_ementa
     */
    public function setDiscEmenta($disc_ementa)
    {
        $this->disc_ementa = $disc_ementa;
    }


    /**
     * @return mixed
     */
    public function getdiscId()
    {
        return $this->disc_id;
    }

    /**
     * @param mixed $disc_id
     */
    public function setdiscId($disc_id)
    {
        $this->disc_id = $disc_id;
    }

    /**
     * @return mixed
     */
    public function getdiscNome()
    {
        return $this->disc_nome;
    }

    /**
     * @param mixed $disc_nome
     */
    public function setdiscNome($disc_nome)
    {
        $this->disc_nome = $disc_nome;
    }


}
