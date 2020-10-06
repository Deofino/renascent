<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renascent</title>
</head>

<body>
    <form action="../controllers/AutorController.php" method="post">
    <input type="text" name="nomeAutor" placeholder="Digite o nome do autor" maxlength="100" required>
    <input type="text" name="paisAutor" placeholder="Digite o o Pais do autor" maxlength="30" required>
    <input type="date" name="nascimentoAutor" placeholder="Digite a data de nascimento do autor" maxlength="8" required>
    <input type="date" name="falecimentoAutor" placeholder="Digite a data de falecimento do autor" maxlength="8" required>
        <button type="submit">Cadastrar autor</button>
    </form>
    <hr> <br><br>
    <form action="../controllers/ClassificacaoController.php" method="post">
        <select name="classificacao">
            <option value="null">Selecione a Categoria</option>
            <option value="Escultura">Escultura</option>
            <option value="Pintura">Pintura</option>
            <option value="vitral">Vitral</option>
            <option value="arquitetonica">Obra arquitetonica</option>
        </select>
    <button type="submit">Cadastrar Classificação</button>
</body>

</html>