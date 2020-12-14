<?php
    include 'crudMercadoria.php';
    $opcao = $_POST["opcao"];

    switch($opcao){
        case 'Cadastrar':
            cadastrarMercadoria($_POST["descricao"], $_POST["quantidade"]);
            header("Location: cadastrarMercadoria.php"); 
        break;
        case 'Alterar':
            alterarMercadoria($_POST["codigo"], $_POST["descricao"], $_POST["quantidade"]);
            header("Location: mostrarMercadoria.php"); 
        break;
        case 'Excluir':
            excluirMercadoria($_POST["codigo"]);
            header("Location: mostrarMercadoria.php"); 
        break;
    }

?>