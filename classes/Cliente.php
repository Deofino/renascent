<?php 
    class Cliente{
        private $nome,$senha,$email;
        public function getNomeUser(){
                return $this->nome;
        }
        public function getSenha(){
                return $this->senha;
        }
        public function getEmail(){
                return $this->email;
        }
        function __construct($nome,$senha,$email)
        {
            $this->nome = $nome;
            $this->senha = $senha;
            $this->email = $email;
        }
    }
?>