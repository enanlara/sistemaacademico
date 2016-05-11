<?php

class ProfessorModel {

    public $prof_id, $prof_nome;
    
    public function __construct($prof_id = null, $prof_nome = null)
    {
        $this->prof_id = $prof_id;
        $this->prof_nome = $prof_nome;
    }


    /**
     * @return mixed
     */
    public function getprofId()
    {
        return $this->prof_id;
    }

    /**
     * @param mixed $prof_id
     */
    public function setprofId($prof_id)
    {
        $this->prof_id = $prof_id;
    }

    /**
     * @return mixed
     */
    public function getprofNome()
    {
        return $this->prof_nome;
    }

    /**
     * @param mixed $prof_nome
     */
    public function setprofNome($prof_nome)
    {
        $this->prof_nome = $prof_nome;
    }


}
