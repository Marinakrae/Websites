<?php

include "includes/conexao.php";

session_start();

mysqli_close($conexao);

$aviso=$_GET['aviso']; //dependendo o valor, vai imprimir um aviso na tela.
$location='index.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="autor" content="Marina" />
    <title> Aviso </title>
    <link rel="stylesheet" href="estilo.css" />
    <link rel="icon" type="imagem/png" href="img/favicon.ico" />
</head>

<body>
    <div class="flex-container">

        <?php 
            include "includes/cabecalho.php";
        ?>

        <div class="flex-corpo">
            <div id="divSobre">
                <?php 
                
                    if($aviso==1){
                        echo "<h1> Email ou senha inválidos!<h1> <a href=\"login.php\">Voltar</a>";
                    } else if($aviso==2){
                        ?><h1> Compra realizada com sucesso!</h1><a href="carrinho.php"> Ir para o carrinho </a> <?php
                    }else if($aviso==3){
                        echo "<h1> Ocorreu um erro! Por favor, tente novamente.<h1> <a href=\"produto-detalhe.php\">Voltar</a>";
                    }else if($aviso==4){
                        echo "<h1> Cliente cadastrado! Você será redirecionado!<h1>";
                        header('Refresh:2; URL='.$location);
                    }else if($aviso==5){
                        echo "<h1> Erro ao salvar cadastro.<h1> <a href=\"login.php\">Voltar</a>";
                    }else if($aviso==6){
                        echo "<h1> Ops! As senhas não correspondem!<h1> <a href=\"login.php\">Voltar</a>";
                    }else if($aviso==7){
                        echo "<h1> Ops! Tente novamente! Mas agora preenchendo todos os campos! 
                              <a href=\"login.php\">Voltar</a> <h1>";  
                    }
                ?>
                
            </div>
        </div>
        
        <?php
            include "includes/rodape.php";
        ?>
        
    </div>
</body>

</html>
