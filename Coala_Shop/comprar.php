<?php

session_start();

include "includes/conexao.php";

$idProdu=$_GET['idProduto'];
    
$sql = "INSERT INTO pedidos(fk_produto,fk_usuario,quantidade)
        VALUES ($idProdu, {$_SESSION['loginCliente']['id']}, 1)";
		             

$retornoInsert1=mysqli_query($conexao,$sql);

$ultimo_id=mysqli_insert_id($conexao);


if($retornoInsert1){
    header('Location:aviso.php?aviso=2'); 
} else
    header('Location:aviso.php?aviso=3');
