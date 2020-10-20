<?php

session_start();

include "includes/conexao.php";

$quantidade=$_GET['quantidade'];
$produto=$_GET['produto'];

if($quantidade==0){
    $sql = "
    DELETE FROM pedidos WHERE fk_produto= $produto
    ";
    
} else {
    $sql = "
    UPDATE pedidos
    SET quantidade = $quantidade
    ";
}

$retorno=mysqli_query($conexao,$sql);


if(isset($retorno){
    header('Refresh:2; URL='.$location;
           
?>           
