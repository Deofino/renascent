<?php
    require_once("global.php");
   $select = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    if($select == "null"){
        echo ("<script>
                location.href = '../views/cadastro-categoria.php';
                alert('Selecione uma classificação');
            </script>");
    }else{
        try {
            $classificacao = new Classificacao();
            $classificacao->setDescricao($select);
            echo $classificacao->cadastrarClassificacao($classificacao);
            echo ("<script>
                location.href = '../views/cadastro-categoria.php';
                alert('Classificação cadastrada com sucesso');
            </script>");
        } catch (Exception $e) {
            echo $e->getMessage();
            echo ("<script>
                location.href = '../views/cadastro-categoria.php';
                alert('Ops, ocorreu um erro!');
            </script>");
        }
      
    }
?>