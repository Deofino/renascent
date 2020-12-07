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
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

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
                    <input type="text" name="descricaoObra" class="input" maxlength="199" required>
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
    <br><br><br>
    <br><br><br>
    
    <br><br><br>
    <br><br><br>

    <?php 
    include_once('./atalhos/footer.php');
?>

</body>

</html>