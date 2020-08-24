<?php

$login = $_POST['txtEmailLogin'];
$senha = $_POST['txtSenhaLogin'];

if(($login == 'adm') && ($senha == '123')){

    session_start();

$_SESSION['login-session'] = $login;
$_SESSION['senha-session'] = $senha;
      
     header ("Location: ../VIEWS/index.php");


}else{

     header ("Location: ../index.php");

}



?>