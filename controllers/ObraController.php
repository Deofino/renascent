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

    $obra->cadastrarObra($obra);

    /*Imagem*/
    $foto = new FotoObra();
    $new_path = "../img/obras/";
    $extension = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
    $name_photo = uniqid() . '.' .$extension;
    move_uploaded_file($_FILES['foto']['tmp_name'],$new_path.$name_photo);
    $foto->setNomeFoto($name_photo);
    $foto->setCaminhoFoto($new_path.$name_photo);
    $foto->setExtensaoFoto($extension);
    $idObra = $obra->ListarUltimoID();
    $foto->inserirFotoObra($idObra,$foto);

?>