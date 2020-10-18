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
    <title>Renascent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/fonta/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
 </head>

  <body>

	<header class="header">
    <div class="content">
      <div class="logo fl-left">
        <a href="#">
          <img src="../IMGS/logoPreta.png" alt="HTML e CSS Pro"/>
        </a>
      </div>

      <a href="#" class="nav-toggle fl-rigth">
        <i class="fas fa-bars"></i> MENU
      </a>

      <nav class="nav active">
        <p class="text-rigth">
        <span class="nav-close">
          <i class="fas fa-times"></i>
        </span>
       </p>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Obras</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="../controllers/logout.php">Sair</a></li>
          <ul class="menuzin">
	  		<li><a href="#">Cadastrar</a>
	         	<ul>
	                  <li><a href="cadastro-autor.php">Autor</a></li>
	                  <li><a href="cadastro-categoria.php">Categoria</a></li>
	                  <li><a href="#">Obra</a></li>
	       		</ul>
			</li>
        </ul>
         
          
        </ul>
      </nav>
    </div>
    </header>
    <!-- end / HEADER-->

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

    
    
<!--FIM-CARD-->
 
<!--FOOTER-->
    <?php include_once('atalhos/footer.php');  //incluindo footer?>
    <!--FIM-FOOTER-->

      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../JS/script1.js"></script>
   </body>
</html>






<?php /*<div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="../controllers/AutorController.php" method="post">
                <h1>Cadastrar Autor</h1>
                <input type="text" name="nomeAutor" placeholder="Digite o nome do autor" maxlength="100" required>
                <input type="text" name="paisAutor" placeholder="Digite o o Pais do autor" maxlength="30" required>
                <span>Data de Nascimento:
                    <input type="date" name="nascimentoAutor" placeholder="Digite a data de nascimento do autor" maxlength="8" required></span>
                <span>Data de Falecimento:
                    <input type="date" name="falecimentoAutor" placeholder="Digite a data de falecimento do autor" maxlength="8" required></span>
                <button class="fonteBtn">Cadastrar Categoria</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="../controllers/ClassificacaoController.php" method="post">
                <h1>Cadastrar Categoria</h1>
                <h3><span>Categoria: <select name="classificacao" class="custom-select sources" placeholder="Selecione"></h3>
                <option value="null">Selecione</option>
                <option value="Escultura">Escultura</option>
                <option value="Pintura">Pintura</option>
                <option value="vitral">Vitral</option>
                <option value="arquitetonica">Arquitetônica</option></select>
                </select></span>
                <br>
                <br>
                <button class="fonteBtn">Cadastrar Categoria</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Olá Funcionáro(adm)!</h1>
                    <p>Entre com os dados dos nossos autores preferidos.</p>
                    <button class="ghost" id="signIn">Cadastrar Obra!</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Seja Bem Vindo!</h1>
                    <h3>"É aqui onde a mágica acontece"</h3>
                    <p>Depois de cadastrar uma categoria, aproveite para cadastrar um Autor.</p>
                    <button class="ghost" id="signUp">Cadastre-o já!</button>
                </div>
            </div>
        </div>
    </div>
*/?>
    