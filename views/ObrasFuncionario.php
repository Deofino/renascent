<?php  

    require_once("../controllers/global.php");
    $obra = new Obra();
    $listaObra = $obra->listarObras();
    $foto = new FotoObra();
    

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Obras funcionario</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    ul {
        list-style: none;
    }

    li a,
    a,
    li {
        text-decoration: none;
        color: black;
        text-transform: uppercase;
    }

    header {
        display: flex;
        justify-content: space-between;
        padding: 10px 30px;
        background-color: gray;
        flex-wrap: wrap;
        margin-bottom: 20px;
        align-items: center;
    }

    header>ul {
        display: flex;
    }

    ul li {
        margin: 10px 10px;
        padding: 10px 10px;
    }

    section {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    input {
        text-align: center;
    }
    .slide{
        display: flex;
        flex-shrink: 300px;
    }
    .card {
        padding: 10px;
        margin: 10px;
    }
    .foto{width: 100%;height: 250px;}
    </style>
</head>

<body>

    <header>
        <a href="index-funcionario.php"> HOME </a>
        <ul>
            <li>Sair</li>
            <li>Contato</li>
            <li>Cadastrar

            </li>
        </ul>
    </header>
    <section>

        <?php

            foreach($listaObra as $row){
                /*aqui muda os campos estilizem deixem bonito com css e responsivo
                leiam esse codigo que ta facil funcionando so bota assim
                */
                $listaFotoObra = $foto->listarFotosObra($row['idObra']); ?>
                <div class="card">
                <?php 
                    foreach ($listaFotoObra as $rowObra) {
                        ?>
                            <img src="<?php
                                echo $rowObra['caminhoFoto'];
                            ?>"
                             alt="Foto obra" style="max-width:300px;max-height:300px">  
                        <?php
                    };
                ?>
                <h3>Title: <?php echo($row['tituloObra']); ?></h3>
                <h3>Descrição: <?php echo($row['descricaoObra']); ?></h3>
                <h3>Autor: <?php echo($row['nomeAutor']); ?></h3>
                <h3>Categoria: <?php echo($row['descricaoClassificacao']); ?></h3>
                <h3>Data: <?php echo($row['dataObra']); ?></h3>
                <h3>Pais: <?php echo($row['paisObra']); ?></h3>
        </div>
        <?php
            };

        ?>

    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>