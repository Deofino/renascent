
<style>

*, *:before, *::after {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
  }
  
  body {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: inherit;
    /*pega o tamanho da fonte do navegador*/
    padding-top: 150px;
  }
  
  input, select, iframe, button {
    border: none;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  
  h1, h2, h3 {
    margin: 0;
    padding: 0;
  }
  
  ol, ul {
    list-style: none;
  }
  
  a {
    text-decoration: none;
    color: inherit;
  }
  
  a:hover {
    color: #daa520;
  }
  
  /*GERAIS
  ------------------------------------------*/
  .section {
    float: left;
    width: 100%;
  }
  
  .content {
    max-width: 960px;
    width: 90%;
    margin: 0 auto;
    /*auto centraliza direita e esquerda*/
  }
  
  /*HEADER
  ------------------------------------------*/
  /*DROPDWON*/
  .menuzin {
    list-style: none;
    float: left;
    z-index: 999;
  }
  
  .menuzin > li {
    position: relative;
    border-right: 1px solid #daa520;
  }
  
  .menuzin li a {
    color: #000;
    text-decoration: none;
    padding: 0px 10px 20px;
    display: block;
  }
  
  .menuzin li a:hover {
    color: #daa520;
  }
  
  .menuzin li ul {
    position: absolute;
    top: 30px;
    background-color: rgba(0, 0, 0, 0.2);
    left: 0;
    padding-top: 10px;
    display: none;
  }
  
  .menuzin li:hover ul, .menu li.over ul {
    display: inline-block;
  }
  
  .menuzin li ul li {
    display: inline-block;
    width: 150px;
  }
  
  .header {
    position: fixed;
    width: 100%;
    top: 0;
    padding-top: 30px;
    z-index: 999;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0, 0, 0, 0.2);
  }
  
  .scroll {
    background-color: #0a0700f6;
    
  }
  
  .header .logo img {
    max-width: 200px;
  }
  
  /*SEARCH E ESTATISTiCAS
  ------------------------------------------*/
  .search-box {
    text-align: center;
    color: #ffffff;
  }
  
  /*BREACKPOINTS MÁXIMOS MOBILE
  ------------------------------------------*/
  @media (max-width: 767.9px) {
    /*MENU*/
    i{
      font-size: 1.5em;
    }
    .nav-toggle {
      color: #fff;
      padding-top: 20px;
      font-size: 22px;
    }
    .nav-close {
      cursor: pointer;
      font-size: 22px;
    }
    .header .nav.active {
      right: 0;
    }
    .header .nav {
      background: #fff;
      width: 350px;
      height: 100%;
      position: fixed;
      padding: 15px;
      right: -100%;
      top: 0;
      z-index: 10;
      -webkit-transition: right .5s ease-in-out;
      transition: right .5s ease-in-out;
    }
    .header .nav ul li {
      padding: 15px 5px;
      font-size: 20px;
      border-bottom: 1px solid #ccc;
    }
    .menuzin {
      width: 100%;
      padding: 0 !important;
    }
    .menuzin li {
      border: none;
      padding: 20px 0 !important;
    }
    .menuzin li ul {
      width: 100%;
      background-color: rgba(255, 255, 255, 0) !important;
      padding-top: 25px;
      padding-left: 15px;
    }
    .menuzin li ul li {
      width: 100%;
      padding-top: 10px;
    }
    .menuzin li a {
      padding: 0;
    }
    .menuzin li ul {
      background: #fff;
    }
  }
  
  /*BREACKPOINTS MÍNIMO WEB
  ------------------------------------------*/
  @media (min-width: 768px) {
    /*quando chegar em 169px, vai acontecer isso*/
    /*MENU*/
    .nav-toggle, .nav-close {
      display: none;
    }
    .header .nav {
      float: right;
      margin-top: 20px;
    }
    .header .nav ul li {
      display: inline-block;
      margin-left: 20px;
    }
    .header .nav ul li a {
      color: #ffff;
    }
    .header .nav ul li a:hover {
      color: #daa520;
    }
  }
  
  /*CLASSES AUXILIARES
  ------------------------------------------*/
  .text-center {
    text-align: center;
  }
  
  .text-left {
    text-align: left;
  }
  
  .text-rigth {
    text-align: right;
  }
  
  .fl-left {
    float: left;
  }
  
  .fl-rigth {
    float: right;
  }
  

</style></style>

<header class="header">
        <div class="content">
            <div class="logo fl-left">
                <a href="#">
                    <img src="../img/logoPreta.png" alt="HTML e CSS Pro" />
                </a>
            </div>

            <a href="#" class="nav-toggle fl-rigth">
                <i class="fas fa-bars"></i>
            </a>

            <nav class="nav">
                <p class="text-rigth">
                    <span class="nav-close">
                        <i class="fas fa-times"></i>
                    </span>
                </p>
                <ul>
                    <li><a href="index-funcionario.php">Home</a></li>
                    <li><a href="ObrasFuncionario.php">Obras</a></li>
                    <li><a href="Contato.php">Contato</a></li>
                    <li><a href="../controllers/logout.php">Sair</a></li>
                    <ul class="menuzin">
                        <li><a href="#">Cadastrar</a>
                            <ul class="menuzinhu">
                                <li><a href="cadastro-autor.php">Autor</a></li>
                                <li><a href="cadastro-categoria.php">Categoria</a></li>
                                <li><a href="cadastro-obra.php">Obra</a></li>
                            </ul>
                        </li>
                    </ul>


                </ul>
            </nav>
        </div>
    </header>


<script>
    let onTop = false;
    let navbar = document.querySelector('.header');
    let menuzin = document.querySelector('.menuzinhu');
    console.log(menuzin);
    window.onscroll = function(evt){
        if(window.scrollY < 10 && !onTop){
            onTop = true;
            navbar.classList.add('onTop');            
            navbar.classList.remove('scroll');      
            menuzin.classList.add('onTop');            
            menuzin.classList.remove('scroll');            
        }
        if(window.scrollY > 50 && onTop){
            onTop = false;
            navbar.classList.add('scroll')
            navbar.classList.remove('onTop');
            menuzin.classList.add('scroll')
            menuzin.classList.remove('onTop');            

        }
    }

</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/script1.js"></script>
