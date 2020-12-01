<?php
    require_once('global.php');
    $nome = filter_input(INPUT_POST,"nomeAutor",FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST,"paisAutor",FILTER_SANITIZE_STRING);
    $nascimento = filter_input(INPUT_POST,"nascimentoAutor",FILTER_SANITIZE_STRING);
    $falecimento = filter_input(INPUT_POST,"falecimentoAutor",FILTER_SANITIZE_STRING);

    if(strtotime($nascimento) < strtotime($falecimento)){
        $anoFalecimento  = date('Y',strtotime($falecimento));
        $anoNascimento  = date('Y',strtotime($nascimento));
        if(($anoFalecimento - $anoNascimento) >= 120){
            echo ("<script>
                location.href = '../views/cadastro-autor.php';
                prompt('Mais de 120 anos? bota seu email aqui mano namoral kkk');
            </script>");
        }else{
            try {
                $autor = new Autor();
                $autor->setNome($nome);
                $autor->setPais($pais);
                $autor->setNascimento($nascimento);
                $autor->setFalecimento($falecimento);
                echo $autor->cadastrarAutor($autor);
                echo ("<script>
                    location.href = '../views/cadastro-autor.php';
                    alert('Autor cadastrado com sucesso!');
                </script>");
            } catch (Exception $e) {
                echo ("<script>
                location.href = '../views/cadastro-autor.php';
                alert('Ops, algo de errado...');
            </script>");
            }
           
        }
    }else{
        echo ("<script>
        location.href = '../views/cadastro-autor.php';
        alert('Idade negativa bro, veio do futuro?');
    </script>");
        }    
?>