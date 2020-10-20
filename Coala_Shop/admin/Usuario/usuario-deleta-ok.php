<?php

include "conexao.php";

if($_GET['id']!=""){
    
    $id= $_GET['id'];
    $sql="DELETE FROM usuario WHERE id=$id";
    
    $retornoDelete= mysqli_query($conexao, $sql);
    
    if($retornoDelete){ //se essa expressão é verdadeira (true)
        echo "Registro deletado com sucesso!" ;
    } else{
        echo "Registro não foi salvo!";
    }
    mysqli_close($conexao);
}