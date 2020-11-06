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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../css/teamplate_cadastro.css" type="text/css" rel="stylesheet">
          
</head>
<body>

<div class="div">
        <h1 class="center">Autor</h1>
        <form action="../controllers/AutorController.php" method="post">

            <div class="form-group spacing">
                <label for="name">Nome:</label>
                <input type="text" name="nomeAutor" class="form-control input">
            </div>

            <div class="form-group spacing">
                <label for="name">País:</label>
                <input type="text" name="paisAutor" class="form-control input">
            </div>

            <div class="form-group row">
                <div class="col">
                    <div class="form-group spacing">
                        <label for="name">Nascimento:</label>
                        <input type="date" name="nascimentoAutor" min="1300-01-01" max="1700-01-01" class="form-control input">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group spacing">
                        <label for="name">Falecimento:</label>
                        <input type="date"min="1300-01-01" name="falecimentoAutor" max="1700-01-01" class="form-control input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button class="btn btn-secondary btn-lg" style="float: right;background-color: rgb(110, 60, 0);
                            letter-spacing: 1.2px;" type="submit">Cadastrar</button>

                        <a href="index-funcionario.php" class="btn btn-lg"
                            style="float: right;color:black;letter-spacing:1.2px;"><strong>Voltar</strong></a>

                    </div>
                </div>
            </div>


        </form>

    </div>
        
</body>
</html>
    


    

    <!--<div class="container" id="container">
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
    
    
     <center>
    <div class="card">
        <h2 class= "card-header">Cadastrar Autor!</h2>
            <div class="card-body">
                    
                        <form action="../controllers/AutorController.php" method="post">
                        <div class="nome">
                            <label>Nome Autor:</label>
                            <input type="text" name="nomeAutor" placeholder="Digite o nome do autor" maxlength="100" required>
                        </div>
                        <div class="pais">
                            <label>País Autor:</label>
                             <input type="text" name="paisAutor" placeholder="Digite o Pais do autor" maxlength="30" required>
                        </div>
                        <br>
                        <div class="dtNascimento">
                        <label>Data de Nascimento:</label>
                                <input type="date" name="nascimentoAutor" min="1300-01-01" max="1700-01-01" tabindex="3" placeholder="Digite a data de nascimento do autor" maxlength="8" required></span>
                            </div>
                            <br>
                            <div class="dtfalecimento">
                            <label>Data de Falecimento:</label>
                            <input type="date" name="falecimentoAutor" min="1300-01-01" max="1700-01-01"  tabindex="4" placeholder="Digite a data de falecimento do autor" maxlength="8" required></span>
                            </div>
                            <br>
                            <br>
                            
                            
                            <div class="botao1">
                            <button type="submit" class="fonteBtn">Cadastrar Autor</button>
                            </div>
                           
                         <a href="index-funcionario.php" class="voltar">Voltar</a>
                            

                    </form>
                    </center>       
            </div>        
        </div>

    -->
