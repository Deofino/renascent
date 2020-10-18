<?php
    require_once("global.php");
   $select = filter_input(INPUT_POST, 'classificacao', FILTER_SANITIZE_STRING);;
    if($select == "null"){
        echo("selecionar uma classificacao");
    }else{
        try {
            $classificacao = new Classificacao($select);
             echo $classificacao->cadastrarClassificacao($classificacao);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
      
    }
?>