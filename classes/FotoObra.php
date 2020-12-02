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
                $con = Conexao::getConexao();
                $query = $con->prepare("insert into tbfotoobra (nomeFoto,
                caminhoFoto,extensaoFoto,idObra,idFuncionario,dataFoto) values(?,?,?,?,?,?)");
                $query->bindValue(1,$fotoObra->getNomeFoto());
                $query->bindValue(2,$fotoObra->getCaminhoFoto());
                $query->bindValue(3,$fotoObra->getExtensaoFoto());
                $query->bindValue(4,$idObra);
                $query->bindValue(5,$fotoObra->getFuncionario());
                $query->bindValue(6,$fotoObra->getDataFoto());
                $query->execute();
                return 've o php my admin';
        }
        public function listarFotosObra($idObra){
                $con  = Conexao::getConexao();
                $query = $con->prepare("select id,nomeFoto,idObra,caminhoFoto,extensaoFoto from tbfotoobra
                        where idObra = ?");

                        /*se verem eu decidi nao retorna o cod da obra
                                mas da pra eu retorna e ver qual 
                                olhem

                                certo?
                        */
                        $query->bindValue(1,$idObra);
                        $query->execute();
                        $list = $query->fetchAll();
                        return $list;
                
        }
}

?>