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
            <h1 class="txt-center">Autor</h1>
            <form class="formulario" action="../controllers/AutorController.php" method="post">

                <div class="form-item div-center full">
                    <label for="nome" class="label">Nome:</label>
                    <input type="text" name="nomeAutor" class="input" maxlength="50" autofocus required>
                </div>

                <div class="form-item div-center full">
                    <label for="nome" class="label">País:</label>
                    <input type="text" name="paisAutor" class="input" maxlength="50" required>
                </div>

                <div class="form-item div-center divider">

                    <div class="form-item">
                        <label for="nome" class="label">Nascimento:</label>
                        <input type="date" name="nascimentoAutor" min="1300-01-01" max="1700-01-01" class="input" maxlength="50" required>
                    </div>

                   <div class="form-item">
                        <label for="nome" class="label">Falecimento:</label>
                        <input type="date" name="falecimentoAutor" min="1300-01-01" max="1700-01-01" class="input" maxlength="50" required>
                    </div>
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
</body>
</html>
    
