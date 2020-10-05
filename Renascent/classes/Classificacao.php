<?php
 class Classificacao{
    private $descricao;
    public function getDescricao(){
            return $this->descricao;
    }
    public function setDescricao($descricao){
            $this->descricao = $descricao;
            return $this;
    }
    function __construct($descricao)
    {
        $this->descricao = $descricao;
    }
}
?>