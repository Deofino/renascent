<?php
require_once("../controllers/global.php");
$classificacao = new Classificacao();
$listaClassificacao = $classificacao->listarClassificacao();

$autor = new Autor();
$listaAutor = $autor->listarAutor();

$idObra = $_GET['idObra'];
$obra = new Obra();
$obraLista = $obra->listarObras();
$obra = $obra->getObra($obraLista,$idObra);




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
                <form class="formulario" method="post"
                enctype="multipart/form-data">

                    <div class="form-item div-center full">
                        <label for="nome" class="label">Título:</label>
                        <input type="text" name="tituloObra" class="input" maxlength="50" autofocus required
                        value="<?php echo $obra['tituloObra']; ?>"
                        >
                    </div>

                    <div class="form-item div-center full">
                        <label for="nome" class="label">Descrição:</label>
                        <input type="text" name="descricaoObra" class="input" maxlength="199" required
                        value="<?php echo $obra['descricaoObra']; ?>"
                        >
                    </div>

                    <div class="form-item div-center divider">

                        <div class="form-item">
                            <label for="nome" class="label">Autor:</label>
                            <select name="autor" class="input">
                            <option value="<?php echo $obra['idAutor'];?>"><?php echo $obra['nomeAutor'];?></option>
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
                            <option value="<?php echo $obra['idClassificacao'];?>"><?php echo $obra['descricaoClassificacao'];?></option>
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
                                maxlength="50" required value="<?php echo $obra['paisObra']?>">
                        </div>

                        <div class="form-item">
                            <label for="nome" class="label">Data:</label>
                            <input type="date" name="data" min="1300-01-01" max="1700-01-01" class="input"
                                maxlength="50" required value="<?php echo $obra['dataObra']?>">
                        </div>
                    </div>

                    <div class="form-item div-center full">
                        <label for="nome" class="label">Adicione mais fotos:</label>
                        <input type="file" name="foto[]" multiple="multiple" class="input">
                    </div>

                    <div class="form-item div-right div-center full">
                        <button type="submit" class="btn_enviar">Enviar</button>
                    </div>

                </form>
            </div>

        </main>
    <br><br><br>

    <?php 
    include_once('./atalhos/footer.php');
?>


    <?php   
        if(isset($_FILES['foto'])){
            $tituloObra = filter_input(INPUT_POST, 'tituloObra', FILTER_SANITIZE_STRING);
            $descricaoObra = filter_input(INPUT_POST, 'descricaoObra', FILTER_SANITIZE_STRING);
            $autorObra = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
            $classificacaoObra = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
            $paisObra = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
            $dataObra = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
            $newObra = new Obra();
            $newObra->setTitulo($tituloObra);
            $newObra->setDescricao($descricaoObra);
            $newObra->setPais($paisObra);
            $newObra->setAutor($autorObra);
            $newObra->setClassificacao($classificacaoObra);
            $newObra->setDataObra($dataObra);
            $newObra->editarObra($newObra,$idObra);

            $fotos = $_FILES['foto'];
            $caminhoFoto = '../img/obras/';
            
            for ($i=0; $i < count($fotos['name']) ; $i++) { 

                $ext = pathinfo($fotos['name'][$i], PATHINFO_EXTENSION);
                $name = uniqid() . '.' . $ext;
                
                echo ($ext);

                move_uploaded_file($fotos['tmp_name'][$i],$caminhoFoto.$name);

                $newFoto = new FotoObra();
                $newFoto->setNomeFoto($name);
                $newFoto->setCaminhoFoto($caminhoFoto.$name);
                $newFoto->setExtensaoFoto($ext);

                $newFoto->inserirFotoObra($idObra,$newFoto);
            }
            echo ("<script>
            window.alert('Obra atualizada com sucesso');
            window.location.href = 'ObrasFuncionario.php';
        </script>");
        }
        

    ?>
</body>

</html>