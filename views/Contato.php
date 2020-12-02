<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renascent-Contato</title>
    <link rel="stylesheet" type="text/css" href="../css/fonta/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/contato.css">
</head>

<body>

    <?php
    require_once('./atalhos/navbar.php')
    ?>

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
                        <textarea maxlength="300" required rows="6"></textarea>
                    </div>
                    <div class="button">

                        <button type="submit">Enviar</button>

                    </div>


                </form>

            </div>

        </div>
        <br><br>
    </main>


    <?php
    require_once('./atalhos/footer.php');
    ?>
</body>

</html>