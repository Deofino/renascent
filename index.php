<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renascent</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="controllers/CadastroController.php" method="POST">
                <h1>Crie sua conta</h1>
                <span>Entre seus dados <select name="selectCadastrar" class="custom-select sources"
                        placeholder="Cliente">
                        <option value="1">Cliente</option>
                        <option value="2">Funcionario</option>
                    </select></span>
                <input type="text" placeholder="Nome" required maxlength="100" name="txtNomeCadastro" />
                <input type="email" placeholder="E-mail" required maxlength="100" name="txtEmailCadastro" />
                <input type="password" placeholder="Senha" required maxlength="40" name="txtSenhaCadastro" />
                <button class="fonteBtn">Cadastrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post" action="controllers/login.php">
                <h1>Entrar</h1>
                <span>Entre seu e-mail <select name="selectEntrar" class="custom-select sources" placeholder="Cliente">
                        <option value="1">Cliente</option>
                        <option value="2">Funcionario</option>
                    </select></span>
                <input type="text" placeholder="E-mail" required maxlength="100" name="txtEmailLogin" />
                <input type="password" placeholder="Senha" required maxlength="40" name="txtSenhaLogin" />
                <a href="<?php echo 'Cliente: user(123), Funcionário: adm(123)' ?>">Esqueceu sua senha?</a>
                <button class="fonteBtn">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Olá Amigo(a)!</h1>
                    <p>Entre com seus dados e crie sua conta para poder entrar no nosso sistema</p>
                    <button class="ghost" id="signIn">Entre agora!</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bem vindo de volta</h1>
                    <p>Entre com suas credenciais para saber mais sobre o renascentismo</p>
                    <button class="ghost" id="signUp">Cadastre-se já!</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="JS/script.js"></script>
</body>

</html>