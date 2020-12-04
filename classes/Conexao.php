<?php
    class Conexao{
        public static function getConexao(){
            try {
                //arruma aqui pq o sql que gerei ta como db nao bd
                //$conexao = new PDO("mysql:host=localhost;dbname=dbrenascent","root","");
                $conexao = new PDO("mysql:host=sql111.epizy.com;dbname=epiz_27377776_dbrenascent",
                "epiz_27377776", "wYzbO0BgwZ");
                return $conexao;
            } catch (Exception $e) {
                echo ($e);
            }
        }
    }
?>