<?php
    class Conexao{
        public static function getConexao(){
            try {
                $conexao = new PDO("mysql:host=localhost;dbname=bdrenascent","root","");
                return $conexao;
            } catch (Exception $e) {
                echo ($e);
            }
        }
    }
?>