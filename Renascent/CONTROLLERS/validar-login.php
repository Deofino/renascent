<?php
$login = filter_input(INPUT_POST, 'txtEmailLogin', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'txtSenhaLogin', FILTER_SANITIZE_EMAIL);

if(($login === 'adm') && ($senha === '123')){
    session_start();
     $_SESSION['login'] = $login;
     $_SESSION['senha'] = $senha;
     header ("Location: ../VIEWS/index-restrita.php");
}else{
     header ("Location: ../index.php");
}
?>