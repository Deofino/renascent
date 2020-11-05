<?php
    require_once('global.php');
    $nome = filter_input(INPUT_POST,"nomeAutor",FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST,"paisAutor",FILTER_SANITIZE_STRING);
    $nascimento = filter_input(INPUT_POST,"nascimentoAutor",FILTER_SANITIZE_STRING);
    $falecimento = filter_input(INPUT_POST,"falecimentoAutor",FILTER_SANITIZE_STRING);

    if(strtotime($nascimento) < strtotime($falecimento)){
        $anoFalecimento  = date('Y',strtotime($falecimento));
        $anoNascimento  = date('Y',strtotime($nascimento));
        if(($anoFalecimento - $anoNascimento) >= 110){
            ?>
            <center> <img src="../img/download.png"/>
               <h4>Pessoa muito velha, vai tapear nois não!</h4></center>
           </div>
           <?php
           echo "erro2";
        }else{
            
            $autor = new Autor($nome,$pais,$nascimento,$falecimento);
            //ve o codigo e importante
            echo $autor->cadastrarAutor($autor);

        }
    }else{
        ?>
        <center> <img src="../img/download.png"/>
           <h4>Pessoa muito velha, vai tapear nois não!</h4></center>
       </div>
       <?php
    }    
?>