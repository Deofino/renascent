<?php
require_once("Conexao.php");
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

    public function cadastrarClassificacao($classificacao){
        $con = Conexao::getConexao();
        $insert = $con->prepare("INSERT INTO tbclassificacao values(default,?)");
        $insert->bindValue(1,$classificacao->getDescricao());
        $insert->execute();
        return "stonks";
    }
}
?>