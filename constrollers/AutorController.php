<?php
    require_once('global.php');
    $nome = filter_input(INPUT_POST,"nomeAutor",FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST,"paisAutor",FILTER_SANITIZE_STRING);
    $nascimento = filter_input(INPUT_POST,"nascimentoAutor",FILTER_SANITIZE_STRING);
    $falecimento = filter_input(INPUT_POST,"falecimentoAutor",FILTER_SANITIZE_STRING);

    if(strtotime($nascimento) < strtotime($falecimento)){
        if(strtotime($nascimento) > getdate() || strtotime($falecimento) > getdate()){
            //nascimento ou falecimento maior que a data atual
            ?> 
            <center><img src="../IMGS/download.png"/>
              <h4>Nascimento maior que data atual!</h4></center>
           </div>
           <?php
        }
        $anoFalecimento  = date('Y',strtotime($falecimento));
        $anoNascimento  = date('Y',strtotime($nascimento));
        if(($anoFalecimento - $anoNascimento) >= 110){
            ?>
            <center> <img src="../IMGS/download.png"/>
               <h4>Pessoa muito velha, vai tapear nois não!</h4></center>
           </div>
           <?php
        }else{
            
            $autor = new Autor($nome,$pais,$nascimento,$falecimento);
            //ve o codigo e importante
            $autor->cadastrarAutor($autor);
        }
    }else{
        ?>
         <center><img src="../IMGS/download.png"/>
          <h4>Nascimento maior que falecimento!</h4></center>
       </div>
       <?php
       // header("Location: ../views/index.php");
    }
    
?>