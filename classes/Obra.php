<?php
    class Obra{
        private $titulo,$descricao,$autor,$dataObra,$classificacao,$periodo,$pais,$funcionario,$dataCadastro;

        public function getTitulo(){
                return $this->titulo;
        }
        public function setTitulo($titulo){
                $this->titulo = $titulo;
                return $this;
        }
        public function getDescricao(){
                return $this->descricao;
        }
        public function setDescricao($descricao){
                $this->descricao = $descricao;
                return $this;
        }
        public function getAutor(){
                return $this->autor;
        }
        public function setAutor($autor){
                $this->autor = $autor;
                return $this;
        }
        public function getDataObra(){
                return $this->dataObra;
        }
        public function setDataObra($dataObra){
                $this->dataObra = $dataObra;
                return $this;
        }
        public function getClassificacao(){
                return $this->classificacao;
        }
        public function setClassificacao($classificacao){
                $this->classificacao = $classificacao;
                return $this;
        }
        public function getPeriodo(){
                return $this->periodo;
        }
        public function setPeriodo($periodo){
                $this->periodo = $periodo;
                return $this;
        }
        public function getPais(){
                return $this->pais;
        }
        public function setPais($pais){
                $this->pais = $pais;
                return $this;
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

        function __construct($titulo,$descricao,$autor,$dataObra
        ,$classificacao,$periodo,$pais,$funcionario,$dataCadastro)
        {
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->autor = $autor;
            $this->dataObra = $dataObra;
            $this->classificacao = $classificacao;
            $this->periodo = $periodo;
            $this->pais = $pais;
            $this->funcionario = 1;
            $this->dataCadastro = date('Y-m-d');
        }
        public function cadastrarObra($obra){
                $con = Conexao::getConexao();
                $insert = $con->prepare("INSERT INTO tbobra(tituloObra,descricaoObra,idAutor,dataObra,
                idClassificacao,paisObra,idFuncionario,dataCadastro)
                 values(?,?,?,?,?,?,?,?,?)");
                $insert->bindValue(1,$obra->getTitulo());
                $insert->bindValue(2,$obra->getDescricao());
                $insert->bindValue(3,$obra->getAutor());
                $insert->bindValue(4,$obra->getDataObra());
                $insert->bindValue(5,$obra->getClassificacao());
                $insert->bindValue(6,$obra->getPeriodo());
                $insert->bindValue(7,$obra->getPais());
                $insert->bindValue(8,$obra->getFuncionario());
                $insert->bindValue(9,$obra->getDataCadastro());
                $insert->execute();
                return ;
            }

    }
?>