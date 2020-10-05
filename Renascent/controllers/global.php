<?php
    spl_autoload_register('carregarClasse');

    function carregarClasse($nomeClass)
    {
        if(file_exists('../classes/'.$nomeClass.'.php')){
            require_once '../classes/'.$nomeClass.'.php';
        }    
    }
?>