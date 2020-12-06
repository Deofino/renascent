<?php

function limita_caracteres($texto, $limite, $quebra = true)
{
    $tamanho = strlen($texto);
    if ($tamanho <= $limite) { //Verifica se o tamanho do texto é menor ou igual ao limite
        $novo_texto = $texto;
    } else { // Se o tamanho do texto for maior que o limite
        if ($quebra == true) { // Verifica a opção de quebrar o texto
            $novo_texto = trim(substr($texto, 0, $limite)) . "...";
        } else { // Se não, corta $texto na última palavra antes do limite
            $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)) . "..."; // Corta o $texto até a posição localizada
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

if ($session != 'adm' and $session != 'user') {
    header('Location: ../index.php');
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras funcionario</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
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
<script>
    let titulos = [];
    let ids = [];
    let descricoes = [];
    let paises = [];
    let categorias = [];
    let autores = [];
    let datas = [];
</script>

<body>

    <?php
    require_once('./atalhos/navbar.php');
    ?>


    <main>
        <div class="cont">
            <?php

            foreach ($listaObra as $rowObra) {
                $idObra = $rowObra['idObra'];
                $tituloObra = $rowObra['tituloObra'];
                $descricaoObra = $rowObra['descricaoObra'];
                $autorObra = $rowObra['nomeAutor'];
                $classificacao = $rowObra['descricaoClassificacao'];
                $pais = $rowObra['paisObra'];
                $data = $rowObra['dataObra'];
                $primeiraFoto = $foto->listarFoto($idObra);
                $listaFotosObras = $foto->listarFotosObra($idObra);
            ?>

                <div class="card">

                    <div class="imgBox">
                        <img src="<?php echo ($primeiraFoto) ?>" alt="Foto" class="imgs-obra">

                    </div>
                    <div class="contente">
                        <h3><?php echo limita_caracteres($tituloObra, 15, true); ?></h3>
                        <p><?php echo limita_caracteres($descricaoObra, 100, true) ?></p>
                        <div class="func">
                            <a href="editarObra.php?idObra=<?php echo ($idObra); ?>">Editar</a>
                            <a href="../controllers/excluirObra.php?idObra=<?php echo ($idObra); ?>">Excluir</a>
                        </div>
                    </div>
                </div>



                <script>
                    titulos.push('<?php echo $tituloObra ?>');
                    ids.push('<?php echo $idObra ?>');
                    descricoes.push('<?php echo $descricaoObra ?>');
                    paises.push('<?php echo $pais ?>');
                    categorias.push('<?php echo $classificacao ?>');
                    autores.push('<?php echo $autorObra ?>');
                    datas.push('<?php echo $data ?>');
                </script>

            <?php

            }

            ?>
        </div>
    </main>
    <br><br><br>

    <div class="manopfvfunciona" style="position: relative;">
        <div class="background">
            <div class="imagem-bg">
                <div class="slider">
                    <?php
                    $i = 0;
                    foreach ($listaFotosObras as $foto) {
                    ?>
                        <img src="<?php
                                    echo $foto['caminhoFoto'];
                                    ?>" alt="Imagem" class="img-bg" id="<?php echo ($i) ?>">

                    <?php $i++;
                    }
                    ?>
                    <div class="right" id="right">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div class="conteudo">
                <div class="titulo">
                    <h3 class="tit">
                    </h3>
                </div>
                <div class="descricao">
                    <h3 class="desc"></h3>
                </div>
                <div class="autor">
                    <h3 class="aut"></h3>
                </div>
                <div class="pais">
                    <h3 class="pa"></h3>
                </div>
                <div class="categoria">
                    <h3 class="cat"></h3>
                </div>
                <div class="data">
                    <h3 class="dat"></h3>
                </div>
            </div>

            <div class="close">
                <span class="btn_fechar">&times;</span>
            </div>
        </div>
    </div>


    </div>
    <div class="footer"></div>
    <?php
    require_once('./atalhos/footer.php');
    ?>



    <script>
        let imagens = document.querySelectorAll(".imgs-obra");
        let background = document.querySelector('.background');
        let controleProx = document.querySelector('#right');
        let controlePrev = document.querySelector('#left');
        let btn_fechar = document.querySelector('.btn_fechar');
        let setImage = document.querySelectorAll('.img-bg');
        let imagemSRC = '';


        let titulo = document.querySelector('.tit');
        let descricao = document.querySelector('.desc');
        let autor = document.querySelector('.aut');
        let pais = document.querySelector('.pa');
        let categoria = document.querySelector('.cat');
        let data = document.querySelector('.dat');

        setImage[0].classList.add('image-active');

        for (let i = 0; i < imagens.length; i++) {
            imagens[i].addEventListener('click', function(evt) {



                imagemSRC = imagens[i].getAttribute('src');
                setImage[i].setAttribute('src', imagemSRC);
                background.classList.add('active');
                btn_fechar.classList.add('btn_fechar_active');
                titulo.innerHTML = 'Título: ' + titulos[i];
                descricao.innerHTML = 'Descrição: ' + descricoes[i];
                autor.innerHTML = 'Autor: ' + autores[i];
                pais.innerHTML = 'Origem: ' + paises[i];
                categoria.innerHTML = 'Categoria: ' + categorias[i];
                data.innerHTML = 'Data: ' + datas[i];

            })

        }
        let max = setImage.length;
        let i = 0;
        let j = 1;
        controleProx.addEventListener('click', prox, true);

        function prox() {

            if (j < max) {

                setImage[i].classList.remove('image-active');
                setImage[j].classList.add('image-active');
                j++;
                i++;
            } else {
                setImage[i].classList.remove('image-active');
                i = 0;
                setImage[i].classList.add('image-active');
                j = 1;
            }
        }

        btn_fechar.addEventListener('click', function() {
            background.classList.remove('active');
            btn_fechar.classList.remove('btn_fechar_active');
        })


        let divFunc = document.querySelectorAll('.func');
        let sessionObra = '<?php echo ($session); ?>';
        if (sessionObra != 'adm') {
            for (let i = 0; i < divFunc.length; i++) {
                divFunc[i].style.display = 'none';
            }
        }
    </script>

</body>

</html>