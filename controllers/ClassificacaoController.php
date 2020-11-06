<?php
    require_once("global.php");
   $select = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    if($select == "null"){
        echo("selecionar uma classificacao");
    }else{
        try {
            $classificacao = new Classificacao();
            $classificacao->setDescricao($select);
            echo $classificacao->cadastrarClassificacao($classificacao);
            header("Location: ../views/cadastro-categoria.php");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
      
    }
?>