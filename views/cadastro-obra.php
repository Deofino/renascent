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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../css/teamplate_cadastro.css" type="text/css" rel="stylesheet">

</head>

<body>

    <div class="div" style="margin-top: 10px;">
        <h1 class="center">Obra</h1>
        <form action="../controllers/ObraController.php" method="post" 
        enctype="multipart/form-data">

            <div class="form-group spacing">
                <label for="name">Título:</label>
                <input type="text" name="tituloObra" class="form-control input" required maxlength="60">
            </div>

            <div class="form-group spacing">
                <label for="name">Descrição:</label>
                <input type="text" name="descricaoObra" class="form-control input"required maxlength="200">
            </div>

            <div class="form-group">

                <div class="form-group spacing">
                    <label for="name">Categoria:</label>
                    <select name="categoria" class="form-control input" required>
                    <option value="null">Selecione</option>
                        <?php
                                foreach($listaClassificacao as $row){?>
                        <option value="
                                    <?php echo($row['idClassificacao']); ?>
                                    "><?php echo($row['descricaoClassificacao']); ?>
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
                            ?><option value="<?php echo($row['idAutor']); ?>"><?php echo($row['nomeAutor']); ?></option>
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

                        <a href="index-funcionario.php" class="btn btn-lg"
                            style="float: right;color:black;letter-spacing:1.2px;"><strong>Voltar</strong></a>

                    </div>
                </div>
            </div>


        </form>

    </div>

</body>

</html>