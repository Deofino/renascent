<?php
    require_once('global.php');
    $obra = new Obra();
    $obra->deleteObra($_GET['idObra']);
    echo("<script>alert('Obra deletada com sucesso');</script>");
    echo("<script>location.href='../views/ObrasFuncionario.php'</script>");
?>