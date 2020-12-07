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
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

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
    <br><br><br>
    <br><br><br><br><br>


    <?php
    include_once('./atalhos/footer.php');
    ?>
</body>

</html>