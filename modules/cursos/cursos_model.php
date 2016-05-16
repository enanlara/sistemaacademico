<?php

class CursosModel {

    public $curs_id, $curs_nome;
    
    public function __construct($curs_id = null, $curs_nome = null)
    {
        $this->curs_id = $curs_id;
        $this->curs_nome = $curs_nome;
    }


    /**
     * @return mixed
     */
    public function getCursId()
    {
        return $this->curs_id;
    }

    /**
     * @param mixed $curs_id
     */
    public function setCursId($curs_id)
    {
        $this->curs_id = $curs_id;
    }

    /**
     * @return mixed
     */
    public function getCursNome()
    {
        return $this->curs_nome;
    }

    /**
     * @param mixed $curs_nome
     */
    public function setCursNome($curs_nome)
    {
        $this->curs_nome = $curs_nome;
    }


}
