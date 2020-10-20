<?php

include "includes/conexao.php";

session_start();

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="autor" content="Marina" />
    <title> Coala Shop </title>
    <link rel="stylesheet" href="estilo.css" />
</head>

<body>
    <div class="flex-container">
        
        <h1> Bem vindo! </h1>
        
        <p> <a href="usuario-lista.php">Gerenciar usuários</a></p>
        
        <p> <a href="Produto/produto-lista.php">Gerenciar produtos</a></p>