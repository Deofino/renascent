
<?php
    require_once('./global.php');
    $obra = new Obra();
    if(isset($_GET['idObra'])){
        echo $obra->deleteObra($_GET['idObra']);
        echo ("<script>
            alert('Obra deletada com sucesso');
            window.location.href = '../views/ObrasFuncionario.php';
        </script>");
    }

?>