<?php
    require_once("Conexao.php");
    class Autor{
        private $id,$nome,$pais,$nascimento,$falecimento,$funcionario,$dataCadastro; 

        public function __construct()
        {
                $this->dataCadastro = date('Y-m-d');
                //como ak a gente ta inserindo uma FK, eu coloquei o 2, mas e pq no
                //meu banco de dados, o funcionario é o 2, no daí talvez tenha que mudar
                //ou criar um funcionario e colocar o ID dele aqui
                $this->funcionario = 1;
                //merda tinha truncado as tabelas, ai o não tinha os funcionario ai deu ruim rapaz
        }

        public function getId(){
                return $this->id;
        }
 
        public function setId($id){
                $this->id = $id;
                return $this;
        }

        public function getNome(){
                return $this->nome;
        }

        public function setNome($nome){
                $this->nome = $nome;
                return $this;
        }
        public function getPais(){
                return $this->pais;
        }

        public function setPais($pais){
                $this->pais = $pais;
                return $this;
        }

        public function getNascimento(){
                return $this->nascimento;
        }

        public function setNascimento($nascimento){
                $this->nascimento = $nascimento;
                return $this;
        }

        public function getFalecimento(){
                return $this->falecimento;
        }
        public function setFalecimento($falecimento){
                $this->falecimento = $falecimento;
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
        public function cadastrarAutor($autor){
                $con = Conexao::getConexao();
                $insert = $con->prepare("INSERT INTO tbautor(nomeAutor,paisOrigem,nascimentoAutor
                ,falecimentoAutor,dataCadastro,idFuncionario) values(?,?,?,?,?,?)");
                $insert->bindValue(1,$autor->getNome());
                $insert->bindValue(2,$autor->getPais());
                $insert->bindValue(3,$autor->getNascimento());
                $insert->bindValue(4,$autor->getFalecimento());
                $insert->bindValue(5,$autor->getDataCadastro());
                $insert->bindValue(6,$autor->getFuncionario());
                $insert->execute();
                return $autor->getDataCadastro();
        }
        public function listarAutor(){
                $conexao = Conexao::getConexao();
                $sqlQuery = "select idAutor, nomeAutor from tbautor";
                $query = $conexao->query($sqlQuery);
                $lista = $query->fetchAll();
                return $lista;
        }
       
    }
