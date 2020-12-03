<?php
require_once("../controllers/global.php");
$classificacao = new Classificacao();
$listaClassificacao = $classificacao->listarClassificacao();

$autor = new Autor();
$listaAutor = $autor->listarAutor();

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
            <h1 class="txt-center">Obra</h1>
            <form class="formulario" action="../controllers/ObraController.php" method="post"
            enctype="multipart/form-data">

                <div class="form-item div-center full">
                    <label for="nome" class="label">Título:</label>
                    <input type="text" name="tituloObra" class="input" maxlength="50" autofocus required>
                </div>

                <div class="form-item div-center full">
                    <label for="nome" class="label">Descrição:</label>
                    <input type="text" name="descricaoObra" class="input" maxlength="100" required>
                </div>

                <div class="form-item div-center divider">

                    <div class="form-item">
                        <label for="nome" class="label">Autor:</label>
                        <select name="autor" class="input">
                        <option value="null">Selecione</option>
                            <?php
                                    foreach($listaAutor as $row){
                                        ?>
                                            <option value="<?php
                                                echo ($row['idAutor']);
                                            ?>">
                                            <?php
                                                echo($row['nomeAutor'])
                                            ?>    
                                        </option>
                                        <?php
                                    }
                                ?>
                        </select>    
                    </div>

                    <div class="form-item">
                        <label for="nome" class="label">Categoria:</label>
                        <select name="categoria" class="input">
                        <option value="null">Selecione</option>
                           <?php
                                foreach($listaClassificacao as $row){
                                    ?>
                                        <option value="<?php
                                            echo ($row['idClassificacao']);
                                        ?>">
                                        <?php
                                            echo($row['descricaoClassificacao'])
                                        ?>    
                                    </option>
                                    <?php
                                }
                            ?>
                        </select>  
                    </div>
                </div>
                
                <div class="form-item div-center divider">

                    <div class="form-item">
                        <label for="nome" class="label">País:</label>
                        <input type="text" name="pais" class="input"
                            maxlength="50" required>
                    </div>

                    <div class="form-item">
                        <label for="nome" class="label">Data:</label>
                        <input type="date" name="criacao" min="1300-01-01" max="1700-01-01" class="input"
                            maxlength="50" required>
                    </div>
                </div>

                <div class="form-item div-center full">
                    <label for="nome" class="label">Foto:</label>
                    <input type="file" name="foto" class="input" maxlength="100" required>
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
    <main class="main" >
        <h1 class="center">Obra</h1>
        <form action="../controllers/ObraController.php" method="post" enctype="multipart/form-data">

            <div class="form-group spacing">
                <label for="name">Título:</label>
                <input type="text" name="tituloObra" class="form-control input" required maxlength="60">
            </div>

            <div class="form-group spacing">
                <label for="name">Descrição:</label>
                <input type="text" name="descricaoObra" class="form-control input" required maxlength="200">
            </div>

            <div class="form-group">

                <div class="form-group spacing">
                    <label for="name">Categoria:</label>
                    <select name="categoria" class="form-control input" required>
                        <option value="null">Selecione</option>
                        <?php
                        foreach ($listaClassificacao as $row) { ?>
                            <option value="
                                    <?php echo ($row['idClassificacao']); ?>
                                    "><?php echo ($row['descricaoClassificacao']); ?>
                            </option>
                        <?php }
                        ?>
                    </select>
                </div>

            </div>

            <div class="form-group spacing">
                <label for="name">Autor:</label>
                <select name="autor" class="form-control input" required>
                    <option value="null">Selecione</option>
                    <?php
                    foreach ($listaAutor as $row) {
                    ?><option value="<?php echo ($row['idAutor']); ?>"><?php echo ($row['nomeAutor']); ?></option>
                    <?php }
                    ?>
                </select>
            </div>

            <div class="form-group row">
                <div class="col spacing">
                    <label for="name">Data de Criação:</label>
                    <input type="date" min="1300-01-01" required name="criacao" max="1700-01-01" class="form-control input">

                </div>
                <div class="col spacing">
                    <label for="name">País de origem:</label>
                    <input type="text" name="pais" class="form-control input" required>

                </div>
            </div>

            <div class="form-group">

                <div class="form-group spacing">
                    <label for="name">Selecione as fotos:</label>
                    <input type="file" name="foto" class="input">
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button class="btn btn-secondary btn-lg" style="float: right;background-color: rgb(110, 60, 0);
                            letter-spacing: 1.2px;" type="submit">Cadastrar</button>

                        <a href="index-funcionario.php" class="btn btn-lg" style="float: right;color:black;letter-spacing:1.2px;"><strong>Voltar</strong></a>

                    </div>
                </div>
            </div>


        </form>

    </main>
-->
</body>

</html>