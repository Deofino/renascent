<?php
    require_once("Conexao.php");
    class Autor{
        private $id,$nome,$pais,$nascimento,$falecimento; 

        public function __construct($nome,$pais,$nascimento,$falecimento)
        {
                $this->nome = $nome;
                $this->pais = $pais;
                $this->nascimento = $nascimento;
                $this->falecimento = $falecimento;
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

        public function cadastrarAutor($autor){
                $con = Conexao::getConexao();
                $insert = $con->prepare("INSERT INTO tbautor VALUES (default,?,?,?,?)");
                $insert->bindValue(1,$autor->getNome());
                $insert->bindValue(2,$autor->getPais());
                $insert->bindValue(3,$autor->getNascimento());
                $insert->bindValue(4,$autor->getFalecimento());
                $insert->execute();
                return $autor->getNascimento();
        }
        public function autores(){
                $con = Conexao::getConexao();
                $selecet = $con->prepare("select nomeAutor from tbautor where idAutor = 1");
                $selecet->execute();
                
        }
    }
