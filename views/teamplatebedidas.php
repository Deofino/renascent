<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team plate tinindo</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/teamplate_cadastro.css">
</head>

<body>

    <div class="div">
        <h1 class="center">Autor</h1>
        <form action="" method="post">

            <div class="form-group spacing">
                <label for="name">Nome:</label>
                <input type="text" class="form-control input">
            </div>

            <div class="form-group spacing">
                <label for="name">País:</label>
                <input type="text" class="form-control input">
            </div>

            <div class="form-group row">
                <div class="col">
                    <div class="form-group spacing">
                        <label for="name">Nascimento:</label>
                        <input type="date" class="form-control input">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group spacing">
                        <label for="name">Falecimento:</label>
                        <input type="date" class="form-control input">
                    </div>
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
    
    <div class="div">
        <h1 class="center">Autor</h1>
        <form action="" method="post" class="form-group spacing">
            <label for="type">Tipo categoria:</label>
            <select name="categoria" class="form-control input"id="">
                <option value="0">Selecione</option>
                <option value="0">Selecione</option>
                <option value="0">Selecione</option>
                <option value="0">Selecione</option>
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

    </div>

    <br><br><br><br>
</body>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>