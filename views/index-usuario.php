<?php 
  session_start();
if (($_SESSION ['email'] != 'user') ||
    ($_SESSION ['password'] != md5('123'))) {
        header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Renascent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/fonta/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
  </head>

  <body>

    <?php
      include_once('./atalhos/navbar.php');
    ?>

    <!-- start SEARCH E ESTRATISTICAS-->
      <section class="section">
        <div class="search-box">
          <header>
            <h1>Renascent</h1>
            <p class="tagline">Sua arte preferida em forma digital</p><!--subtitulo-->
          </header>
          <form class="formSearch" method="post" option="">
            <input type="search" name="busca" id="busca" placeholder="Pesquisar"/>
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="estatisticas">
          <div class="estatisticas-item">
            <span></span>
            <p>Leonardo Da Vinci</p>
          </div>
          <div class="estatisticas-item">
            <span></span>
            <p>Michelangelo</p>
          </div>
          <div class="estatisticas-item">
            <span></span>
            <p>Rafael Sanzio</p>
          </div>
          <div class="estatisticas-item">
            <span></span>
            <p>Ticiano Vecellio</p>
          </div>
        </div>
      </section>
    <!-- end SEARCH E ESTATISTICAS-->

    <!--CARD-->

    <?php include_once('teste.php');  //incluindo carrossel?>
    
<!--FIM-CARD-->
 
<!--FOOTER-->
    <?php include_once('atalhos/footer.php');  //incluindo footer?>
    <!--FIM-FOOTER-->


  </body>
</html>