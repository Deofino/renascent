<?php
session_start();
if (($_SESSION['email'] != 'adm') ||
    ($_SESSION['password'] != md5('123'))
) {
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renascent</title>
    <link href="../css/cadastros.css" type="text/css" rel="stylesheet">

</head>

<body>
    <?php
    include_once('./atalhos/navbar.php');
    ?>

    <main class="main">

        <div class="contet">
            <h1 class="txt-center">Categoria</h1>
            <form class="formulario" action="../controllers/ClassificacaoController.php" method="post">

                <div class="form-item div-center full">
                    <label for="nome" class="label">Escolha:</label>
                    <select name="categoria" class="select input" id="">
                        <option value="null" class="opt">Selecione</option>
                        <option value="Escultura" class="opt">Escultura</option>
                        <option value="Pintura" class="opt">Pintura</option>
                        <option value="Musica" class="opt">Musica</option>
                        <option value="Vitral" class="opt">Vitral</option>
                        <option value="Dança" class="opt">Dança</option>
                        <option value="Cinema" class="opt">Cinema</option>
                        <option value="Teatro" class="opt">Teatro</option>
                        <option value="Arte Digital" class="opt">Arte Digital</option>
                        <option value="Arquitetonica" class="opt">Arquitetonica</option>
                    </select>
                </div>

                <div class="form-item div-right div-center full">
                    <button type="submit" class="btn_enviar">Enviar</button>
                </div>

            </form>
        </div>

    </main>

    <?php
    include_once('./atalhos/footer.php');
    ?>
    <!--
    <div class="div">
        <h1 class="center">Categoria</h1>
        <form action="../controllers/ClassificacaoController.php" method="post" class="form-group spacing">
            <label for="type">Tipo categoria:</label>
            <select name="categoria" class="form-control input" id="">
                <option value="null">Selecione</option>
                <option value="Escultura">Escultura</option>
                <option value="Pintura">Pintura</option>
                <option value="Vitral">Vitral</option>
                <option value="Arquitetonica">Arquitetonica</option>
            </select>
            <div class="row">
                <div class="col">
                    <div class="form-group spacing">
                        <button class="btn btn-secondary btn-lg" style="float: right;background-color: rgb(110, 60, 0);
                            letter-spacing: 1.2px;" type="submit">Cadastrar</button>

                        <a href="index-funcionario.php" class="btn btn-lg"
                            style="float: right;color:black;letter-spacing:1.2px;"><strong>Voltar</strong></a>

                    </div>
                </div>
            </div>
        </form>

    </div>-->

</body>

</html>
<!--
    <center>
        <div class="card">
            <br>
            <br>
            <h2 class="card-header">Cadastrar Categoria!</h2>
            <div class="card-body">
                <form action="../controllers/ClassificacaoController.php" method="post">
                    <h4><span>Categoria:
                            <br>
                            <br>

                            <select name="classificacao" class="custom-select sources" placeholder="Selecione"></h4>
                    <option value="null">Selecione</option>
                    <option value="Escultura">Escultura</option>
                    <option value="Pintura">Pintura</option>
                    <option value="vitral">Vitral</option>
                    <option value="arquitetonica">Arquitetônica</option></select>
                    </select></span>
                    <br>
                    <br>
                    <button class="fonteBtn">Cadastrar Categoria</button>
                    <br>
                    <br>
                    <a href="index-funcionario.php" class="voltar">Voltar</a>
                </form>
            </div>
        </div>
    </center>

     --!>