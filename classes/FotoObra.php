<?php

    class FotoObra{
        private $nomeFoto,$caminhoFoto,$extensaoFoto,$funcionario,$dataFoto;
    
        public function getNomeFoto(){
                return $this->nomeFoto;
        } 
        public function setNomeFoto($nomeFoto){
                $this->nomeFoto = $nomeFoto;
                return $this;
        }

        public function getCaminhoFoto(){
                return $this->caminhoFoto;
        } 
        public function setCaminhoFoto($caminhoFoto){
                $this->caminhoFoto = $caminhoFoto;
                return $this;
        }

        public function getExtensaoFoto(){
                return $this->extensaoFoto;
        } 
        public function setExtensaoFoto($extensaoFoto){
                $this->extensaoFoto = $extensaoFoto;
                return $this;
        } 
        public function getFuncionario(){
                return $this->funcionario;
        }
        public function setFuncionario($funcionario){
                $this->funcionario = $funcionario;
                return $this;
        } 
        public function getDataFoto(){
                return $this->dataFoto;
        }
        public function setDataFoto($dataFoto){
                $this->dataFoto = $dataFoto;
                return $this;
        }
        public function __construct()
        {
            $this->funcionario = 1;
            $this->dataFoto = date('Y-m-d');
        }
        public function inserirFotoObra($idObra,  $fotoObra){

        }
}

?>