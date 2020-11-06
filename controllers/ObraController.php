<?php
    require_once('global.php');
    $title = filter_input(INPUT_POST,'tituloObra',FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST,'descricaoObra',FILTER_SANITIZE_STRING);
    $criacao = filter_input(INPUT_POST,'criacao',FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST,'categoria',FILTER_SANITIZE_STRING);
    $autor = filter_input(INPUT_POST,'autor',FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST,'pais',FILTER_SANITIZE_STRING);

    $obra = new Obra();
    $obra->setTitulo($title);
    $obra->setDescricao($descricao);
    $obra->setDataObra($criacao);
    $obra->setAutor($autor);
    $obra->setClassificacao($categoria);
    $obra->setPais($pais);

    echo $obra->cadastrarObra($obra);

?>