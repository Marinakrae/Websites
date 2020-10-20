<?php

include "includes/conexao.php";

session_start();

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="autor" content="Marina" />
    <title> Produtos em promoção </title>
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
                <h1> Confira todas as ofertas imperdíveis da Coala Shop!*</h1>
                <br>
                <img src="img/banner_promo_3.png" width="100%">
                <br>
                <br>
                <br>
                <img src="img/banner_promo_1.png" width="100%">
                <br>
                <br>
                <br>
                <img src="img/banner_promo_2.png" width="100%">
                <p><a href="https://br.freepik.com/vetores-gratis/banners-de-promocao-de-ofertas-e-vendas_687157.htm">Templates designed by Freepik</a></p>
                <p> *Ofertas válidas apenas com a utilização do cartão fidelidade Coala Shop.</p>
            </div>
        </div>
        <?php include "includes/rodape.php"; ?>

    </div>
</body>

</html>
