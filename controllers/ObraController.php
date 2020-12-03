<?php
    require_once('global.php');
    try{
        $title = filter_input(INPUT_POST,'tituloObra',FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST,'descricaoObra',FILTER_SANITIZE_STRING);
        $criacao = filter_input(INPUT_POST,'criacao',FILTER_SANITIZE_STRING);
        $categoria = filter_input(INPUT_POST,'categoria',FILTER_SANITIZE_STRING);
        $autor = filter_input(INPUT_POST,'autor',FILTER_SANITIZE_STRING);
        $pais = filter_input(INPUT_POST,'pais',FILTER_SANITIZE_STRING);
    
        //????? vii?
        //ce falou
        //duvida aqui

        $obra = new Obra();
        $obra->setTitulo($title);
        $obra->setDescricao($descricao);
        $obra->setDataObra($criacao);
        $obra->setAutor($autor);
        $obra->setClassificacao($categoria);
        $obra->setPais($pais);
    
        //PRIMEIRA COISA QUE FACO E CADASTRAR A FOBRA
        //TENDEU VI?
        //MAIS ALGUMA COISA
        //SOBRE OUTRA COISA
        //ENT BLZ
        //ELA A MIMIR
        //DUVIDA?
        //ENT VOU ENCERRAR
        $obra->cadastrarObra($obra);

        $foto = new FotoObra();
        //aqui pego onde eu vou botar a foto
        $new_path = "../img/obras/";
        //aqui pego a extensão pra se eu quisesse manipular ela
        $extension = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);

        //crio o nome com .extensao que criei 
        $name_photo = uniqid() . '.' .$extension;

        //e aqui mudo, recebe 2 parametros, onde ela se localiza, e onde ela vai ficar e nome
        move_uploaded_file($_FILES['foto']['tmp_name'],$new_path.$name_photo);

        $foto->setNomeFoto($name_photo);
        $foto->setCaminhoFoto($new_path.$name_photo);
        $foto->setExtensaoFoto($extension);
        $idObra = $obra->ListarUltimoID();
        $foto->inserirFotoObra($idObra,$foto);

    
    }catch(Exception $e){
        echo("<scritp>
            window.alert('Ops, ocorreu algum erro interno...');
        </script>");
    }
    
    echo "<script>alert('Obra cadastrada com sucesso!');
            location.href = '../views/cadastro-obra.php';
            </script>";
?>