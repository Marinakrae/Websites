<?php

    include 'conexaoBD.php';
    function cadastrarMercadoria($descricao, $quantidade){
        connect();
        query("INSERT INTO mercadoria (descricao, quantidade) VALUES ('$descricao', $quantidade)");
        close();
    }

    function mostrarMercadoria(){
        connect();
        $resultado = query("SELECT * FROM mercadoria");
        close();
        return $resultado;
    }

    function mostrarMercadoriaAlterar($codigo){
        connect();
        $resultado = query("SELECT * FROM mercadoria WHERE codigo=$codigo");
        close();
        return $resultado;
    }

    function alterarMercadoria($codigo, $descricao, $quantidade){
        connect();
        query("UPDATE mercadoria SET descricao='$descricao', quantidade=$quantidade WHERE codigo=$codigo");
        close();
    }

    function excluirMercadoria($codigo){
        connect();
        query("DELETE FROM mercadoria WHERE codigo=$codigo");
        close();
    }

?>