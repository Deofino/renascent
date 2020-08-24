<?php 
    class User{
        private $nome,$senha,$email;
        public $users = array();
        
        /**
         * Get the value of nomeUser
         */ 
        public function getNomeUser()
        {
                return $this->nome;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
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