<?php
    $select = filter_input(INPUT_POST,'selectEntrar',FILTER_SANITIZE_STRING);
    //dps mudar o e-mail pra tipo email nao string
    $email = filter_input(INPUT_POST,'txtEmailLogin',FILTER_SANITIZE_STRING);
    $password = md5(filter_input(INPUT_POST,'txtSenhaLogin',FILTER_SANITIZE_STRING));
    if($select == 1){
        //entra cliente
        if($email === 'user' && $password === md5('123')){
            header("Location: ../views/index-usuario.php");
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
        }else{
            header("Location: ../index.php");
        }
    }else if($select == 2){
        //entra funcionario
        if($email === 'adm' && $password === md5('123')){
            header("Location: ../views/index-funcionario.php");
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
        }else{
            header("Location: ../index.php");
        }
    }
