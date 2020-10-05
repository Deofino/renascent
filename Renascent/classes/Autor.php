<?php
    class Autor{
        private $id,$nome,$pais,$nascimento,$falecimento; 
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
    }
