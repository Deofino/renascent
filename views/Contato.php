<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renascent-Contato</title>
    <link rel="stylesheet" type="text/css" href="../css/contato.css">
    <link rel="stylesheet" type="text/css" href="../css/fonta/fontawesome-all.min.css">
</head>
<body>
    
    <header class="header scroll">
        <div class="content">
            <div class="logo fl-left">
                <a href="#">
                    <img src="../img/logoPreta.png" alt="HTML e CSS Pro" />
                </a>
            </div>

            <a href="#" class="nav-toggle fl-rigth">
                <i class="fas fa-bars"></i> MENU
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
                    <li><a href="Contato.html">Contato</a></li>
                    <li><a href="../controllers/logout.php">Sair</a></li>
                    <ul class="menuzin">
                        <li><a href="#">Cadastrar</a>
                            <ul class="menuzinhu scroll">
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
    
    <main>

        <div class="l-main">

            <h2>Fale conosco</h2>
            
            <div class="l-info">

                <form action="">
                    
                    <div class="nome">
                        <label for="Nome">Nome:</label> 
                        <input type="text" maxlength="50" required>
    
                    </div>
                   
                    <div class="email">
                        <label for="Email">E-mail:</label> 
                        <input type="email" maxlength="60" required>
       
                    </div>
                    
                    <div class="telefone">
                        <label for="Telefone">Telefone:</label>
                        <input type="number" maxlength="20" required>
                    </div>

                    <div class="categoria">
                        <label for="Categoria">Categoria:</label>
                        <select name="" id="">
                            <option value="0">Selecione</option>
                            <option value="1">Bug ou erros</option>
                            <option value="2">Dica</option>
                            <option value="3">Comentario</option>
                            <option value="4">Elogio</option>
                            <option value="5">Reclamação</option>
                        </select>
                    </div>

                    <div class="txt-area">
                        <label for="Mensagem">Mensagem:</label>
                        <textarea maxlength="300" required 
                        rows="6"></textarea>
                    </div>
                    <div class="button">

                        <button type="submit">Enviar</button>

                    </div>


                </form>

            </div>


        </div>
    </main>


    <?php include_once('./atalhos/footer.php'); ?> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../JS/script1.js"></script>
</body>
</html>