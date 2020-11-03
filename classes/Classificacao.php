<?php
require_once("Conexao.php");
 class Classificacao{
    private $descricao,$funcionario,$dataCadastro;
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
        $this->dataCadastro = date('Y-m-d');
        /*Aqui e a mesma coisa, no meu ta funcionairo ID 2, mas cria o seu e muda ak, ou coloca seu 
        nome no ID 2 tbm que ai da na mesma*/
        $this->funcionario = 2;
    }

    public function getFuncionario(){
            return $this->funcionario;
    }
    public function setFuncionario($funcionario){
            $this->funcionario = $funcionario;
            return $this;
    }
    public function getDataCadastro(){
            return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro){
            $this->dataCadastro = $dataCadastro;
            return $this;
    }
    public function cadastrarClassificacao($classificacao){
        $con = Conexao::getConexao();
        $insert = $con->prepare("INSERT INTO tbclassificacao values(default,?,?,?)");
        $insert->bindValue(1,$classificacao->getDescricao());
        $insert->bindValue(2,$classificacao->getDataCadastro());
        $insert->bindValue(3,$classificacao->getFuncionario());
        $insert->execute();
        return $this->getDescricao().' // '.$this->getFuncionario().' // '.$this->getDataCadastro();
    }
}
?>