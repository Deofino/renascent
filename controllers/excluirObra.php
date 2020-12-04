e link enviará o parâmetro pelo método GET

<a href="test.php?tmpString=Teste">link teste</a>
Para resgatar o parâmetro "tmpString" na página "test.php":

<?php
if (isset($_GET['tmpString']))
    $tmpString = $_GET['tmpString'];
else
    $tmpString = null;

echo 'o valor de tmpString é: '.$tmpString;