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
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"></head>
    <link rel="stylesheet" type="text/css" href="../css/fonta/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css"><body>
<?php include_once('atalhos/menu-funcionario.php'); //incluindo menu?>

<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Cadastrar autor</h3>
    <h4>Insira os dados do autor e cadastre-o!</h4>
    <fieldset>
      <input placeholder="Nome Autor" type="text" tabindex="1" required autofocus maxlength="100">
    </fieldset>
    <fieldset>
      <input placeholder="País de origem" type="text" tabindex="2" required  maxlength="40">
    </fieldset>
    <fieldset>
    <p>Data de nascimento:</p>
      <input  type="date" min="1300-01-01" max="1700-01-01" tabindex="3" required>
    </fieldset>
    <fieldset>
    <p>Data de falecimento:</p>
      <input  type="date" min="1300-01-01" max="1700-01-01"  tabindex="4" required>    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>

<?php include_once('atalhos/footer.php'); //incluindo menu?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>


