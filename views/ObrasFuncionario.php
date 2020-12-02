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
    <title>Obras funcionario</title>
</head>
<style>
    body {
        background: url('../img/bg.png');
    }
</style>

<body>

    <?php
    require_once('./atalhos/navbar.php');
    ?>

<?php
        require_once('./atalhos/footer.php');

        ?>



</body>

</html>