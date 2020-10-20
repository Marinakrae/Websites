<?php 
    session_start();
    include "includes/conexao.php";

    include "includes/busca.php";

    $resultado = mysqli_query($conexao,$sql);

    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="autor" content="Marina" />
    <title> Coala Shop </title>
    <link rel="stylesheet" href="estilo.css" />
    <link rel="icon" type="imagem/png" href="img/favicon.ico" />

</head>

<body>
    <div class="flex-container">

        <?php 
            include "includes/cabecalho.php";
        ?>

        <div class="flex-corpo">
            <a href="promocao.php">
                <div>
                    <img src="img/promocao2.png" width="100%" />
                </div>
            </a>

            <div class="flex-produtos">

                <?php while($produto= mysqli_fetch_array($resultado)){ ?>
                <!-- vai repetir essa div enquanto tiver produtos-->
                <br>
                <a href="produto-detalhe.php?id=<?php echo $produto['id'] ?>">
                    <div class="flex-umproduto">
                        <img src="produtos/<?php echo $produto['id'] ?>.jpg" />
                        <div>
                            <p class="nome-produto">
                                <?php echo $produto['nome'] ?>
                            </p>
                            <p class="preco-real">
                                De R$
                                <?php echo $produto['valor']?>
                            </p>
                            <p class="preco-comdesconto">
                                Por R$
                                <?php echo $produto['valor']*0.90?>,00
                                <!-- 10% de desconto-->
                            </p>
                            <p class="preco-parcelado">
                                Ou em 10x de R$
                                <?php echo $produto['valor']/10 ?>,00
                            </p>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>

        <?php 
            include "includes/rodape.php";
        ?>

    </div>
</body>

</html>
