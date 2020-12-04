<?php
    class Conexao{
        public static function getConexao(){
            try {
                //arruma aqui pq o sql que gerei ta como db nao bd
                $conexaoHost = new PDO("mysql:host=NAOSEI;dbname=NAOSEI", "NAOSEI", "NAOSEI");
                $conexao = new PDO("mysql:host=localhost;dbname=dbrenascent","root","");
                return $conexao;
            } catch (Exception $e) {
                echo ($e);
            }
        }
    }
?>