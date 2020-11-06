<?php
        require_once("Conexao.php");
    class Usuario{
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
        public function getNascimento(){
                return $this->nascimento;
        }
        public function setNascimento($nascimento){
                $this->nascimento = $nascimento;
                return $this;
        }
        public function getCpf(){
                return $this->cpf;
        }

        public function setCpf($cpf){
                $this->cpf = $cpf;
                return $this;
        }

        public function cadastrarUsuario($usuario){
                $conexao = Conexao::getConexao();
                $insert = $conexao->prepare("INSERT INTO tbusuario(nomeUsuario,
                emailUsuario,senhaUsuario)
                values (?,?,?)");
                $insert->bindValue(1,$usuario->getNome());
                $insert->bindValue(2,$usuario->getEmail());
                $insert->bindValue(3,$usuario->getSenha());
                $insert->execute();
                return "".$usuario->getSenha();
        }
    }
?>