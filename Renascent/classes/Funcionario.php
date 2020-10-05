<?php
    class Funcionario{
        private $nome,$email,$senha;
        public function getNome(){
                return $this->nome;
        }
        public function setNome($nome){
                $this->nome = $nome;
                return $this;
        }
        public function getEmail(){
                return $this->email;
        }
        public function setEmail($email){
                $this->email = $email;
                return $this;
        }
        public function getSenha(){
                return $this->senha;
        }
        public function setSenha($senha){
                $this->senha = $senha;
                return $this;
        }
        function __construct($nome,$email,$senha)
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }
    }
?>