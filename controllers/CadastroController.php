<?php
    require_once("global.php");
    $nome = filter_input(INPUT_POST,'txtNomeCadastro',FILTER_SANITIZE_STRING);
    $senha = md5(filter_input(INPUT_POST,'txtSenhaCadastro',FILTER_SANITIZE_STRING));
    $email = filter_input(INPUT_POST,'txtEmailCadastro',FILTER_SANITIZE_STRING);
    $select = filter_input(INPUT_POST,'selectCadastrar',FILTER_SANITIZE_STRING);

    if($select == 1){
        //cadastro cliente
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        echo $usuario->cadastrarUsuario($usuario);
        header('Location: ../index.php');
    }else if($select == 2){
        //cadastro funcionario
        $funcionario = new Funcionario();
        $funcionario->setNome($nome);
        $funcionario->setEmail($email);
        $funcionario->setSenha($senha);
        echo $funcionario->cadastrarFuncionario($funcionario);
        header('Location: ../index.php');
    }else{
        echo("<script>alert('Erro aqui hein')</script>");
    }

?>