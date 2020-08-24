<?php 
  session_start();
/*if (($_SESSION ['login'] != 'adm') ||
    ($_SESSION ['senha'] != '123')) {
        header("Location: ../index.php");
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Renascent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../CSS/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style2.css">
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
          <li><a href="../CONTROLLERS/logout.php">Sair</a></li>
          
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
    <footer>
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<img src="../IMGS/Prancheta 1.png" width="180px">
					
						<p>Sua arte preferida em forma digital.</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Renascentistas</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Camylly F.</a>
							</li>
							<li>
								<a href="#">Gabriely B.</a>
							</li>
							<li>
								<a href="#">Guilherme D.</a>
              </li>
              <li>
                <a href="#">Vitória G.</a>
                <span class="article-date"></span>
								<span class="article-date">24 de Agosto de 2020</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-box">
					<h2>Nos encontre nas redes sociais</h2>
					<ul class="footer-list">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-linkedin"></i>
								<span>Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
      </div>
      <div class="hr">  
      <hr>
    </div>
			</div>
		</footer>
    <!--FIM-FOOTER-->

      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JS/script1.js"></script>
  </body>
</html>