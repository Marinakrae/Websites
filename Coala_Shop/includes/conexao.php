<?php

//Conectar no banco
$databaseHost = 'localhost';
$databaseNome = 'coala_shop';
$databaseUsuario = 'root';
$databaseSenha = '';

$conexao = mysqli_connect($databaseHost, $databaseUsuario, $databaseSenha, $databaseNome);
$conexao->set_charset("utf8");
?>								  