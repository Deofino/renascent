<?php

function limita_caracteres($texto, $limite, $quebra = true){
   $tamanho = strlen($texto);
   if($tamanho <= $limite){ //Verifica se o tamanho do texto é menor ou igual ao limite
      $novo_texto = $texto;
   }else{ // Se o tamanho do texto for maior que o limite
      if($quebra == true){ // Verifica a opção de quebrar o texto
         $novo_texto = trim(substr($texto, 0, $limite))."...";
      }else{ // Se não, corta $texto na última palavra antes do limite
         $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
         $novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; // Corta o $texto até a posição localizada
      }
   }
   return $novo_texto; // Retorna o valor formatado
}

require_once("../controllers/global.php");
$obra = new Obra();
$listaObra = $obra->listarObras();
$foto = new FotoObra();

session_start();
$session = $_SESSION['email'];

   if($session != 'adm' and $session != 'user'){
       header('Location: ../index.php');
   }
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras funcionario</title>
    <link rel="stylesheet" href="../css/cards.css">
</head>
<style>
    body {
        background: url('../img/bg.png');
    }

    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

<body>

    <?php
    require_once('./atalhos/navbar.php');
    ?>


    <main>
        <div class="cont">
            <?php
            
                foreach($listaObra as $rowObra){
                    $idObra = $rowObra['idObra'];
                    $tituloObra = $rowObra['tituloObra'];
                    $descricaoObra = $rowObra['descricaoObra'];
                    $autorObra = $rowObra['nomeAutor'];
                    $classificacao = $rowObra['descricaoClassificacao'];
                    $pais = $rowObra['paisObra'];
                    $data = $rowObra['dataObra'];
                    $listaFoto = $foto->listarFotosObra($idObra);
                    ?>

                        <div class="card">

                            <div class="imgBox">
                                <?php
                                    foreach($listaFoto as $rowFoto){
                                        ?>
                                            <img src="<?php
                                                echo ($rowFoto['caminhoFoto']);
                                            ?>" alt="<?php echo($tituloObra); ?>">
                                        <?php
                                    }
                                ?>
                            </div>
                                <div class="contente">
                                    <h2><?php echo limita_caracteres($tituloObra,15,true); ?></h2>
                                    <p><?php echo limita_caracteres($descricaoObra,100,true) ?></p>
                                </div>
                        </div>

                    <?php

                }
            
            ?>
            <div class="card">
                <div class="imgBox">
                    <img src="../img/fotosHome/img1.jpg">
                </div>
                <div class="contente">
                    <h2>Card 1</h2>
                    <p>AQUI FINGE QUE TEM UM TEXTO BOM, É SÓ PRA EU VER
                        O ESPAÇO QUE TEM, É ISSO, ATÉ MAIS</p>
                </div>
            </div>
        </div>
    </main>
    <div class="footer"></div>
    <?php
    require_once('./atalhos/footer.php');
    ?>



</body>

</html>