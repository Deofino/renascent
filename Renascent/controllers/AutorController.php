<?php
    require_once('global.php');
    $nome = filter_input(INPUT_POST,"nomeAutor",FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST,"paisAutor",FILTER_SANITIZE_STRING);
    $nascimento = filter_input(INPUT_POST,"nascimentoAutor",FILTER_SANITIZE_STRING);
    $falecimento = filter_input(INPUT_POST,"falecimentoAutor",FILTER_SANITIZE_STRING);
    if(strtotime($nascimento) < strtotime($falecimento)){
        if(strtotime($nascimento) > getdate() || strtotime($falecimento) > getdate()){
            //nascimento ou falecimento maior que a data atual
            echo "nascimento ou falecimento maior que a data atual";
        }
        $anoFalecimento  = date('Y',strtotime($falecimento));
        $anoNascimento  = date('Y',strtotime($nascimento));
        if(($anoFalecimento - $anoNascimento) >= 110){
            echo "cara e mt velho mano";
        }else{
            
            $autor = new Autor($nome,$pais,$nascimento,$falecimento);
            //ve o codigo e importante
            $autor->cadastrarAutor($autor);
        }
    }else{
        echo "nascimento maior que falecimento";
       // header("Location: ../views/index.php");
    }
    
?>