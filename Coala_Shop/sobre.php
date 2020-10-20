<?php

include "includes/conexao.php";

session_start();

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="autor" content="Marina" />
    <title> Sobre </title>
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
                <h1> Sobre a Coala Shop</h1>
                <br>
                <p> A Coala Shop tem como missão proporcionar a seus clientes o melhor atendimento possível em matéria de roupas descoladas e pelúcias adoráveis. Oferecemos os melhores produtos do mercado de maneira exclusiva, com entrega e qualidade garantidas. Venha comprar conosco, será um prazer atendê-lo!</p>
            </div>
            <div id="divSobre">

                <h1> Venha também nos visitar!</h1>
                <br>
                <p>Coala Shop - Empresa de comércio de roupas e pelúcias</p>
                <p>Rua Osvaldo Aaranha, 100. Sala 02. Venâncio-aires, RS.</p>

            </div>

            <div class="center">
                <img src="img/logo%20coala%20shop%202.png" width="300px" class="center">
            </div>

        </div>
        <br>
        <br>
        <?php include "includes/rodape.php"; ?>

    </div>
</body>

</html>
