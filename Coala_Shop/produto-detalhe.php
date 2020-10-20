<?php 
    session_start();

    if (isset($_GET['id']) && $_GET['id'] != ""){ 
        
        include "includes/conexao.php";  
        
        $id=$_GET['id'];
        $sql="SELECT * FROM produtos WHERE id= $id";
        $resultado=mysqli_query($conexao, $sql);
        $produto=mysqli_fetch_array($resultado);
        $preco1 = $produto['valor'];
        $preco2 = number_format($preco1,2,",",".");
        $precodesconto = $preco1*0.9;
        $precodesconto = number_format($precodesconto,2,",",".");
        $precoparcelado = $preco1/10;
        $precoparcelado = number_format($precoparcelado,2,",",".");
        
        mysqli_close($conexao);
    }
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

        <?php 
            include "includes/cabecalho.php";
        ?>

        <div class="flex-corpo center">
            <div class="center">
                <img src="produtos/<?php echo $produto['id'] ?>.jpg" width="300px" />
            </div>
            <br>
            <div class="center borda">
                <p class="nome-produto">
                    <?php echo $produto['nome'] ?>
                </p>
                <p class="preco-real">
                    De R$
                    <?php echo $preco2?>
                </p>
                <p class="preco-comdesconto">
                    Por R$
                    <?php echo $precodesconto?>
                    <!-- 10% de desconto-->
                </p>
                <p class="preco-parcelado">
                    Ou em 10x de R$
                    <?php echo $precoparcelado ?>
                </p>
                <br>
                <p class="descricao-produto">
                    <?php echo $produto['descricao'] ?>
                </p>

                <?php
                    if(isset($_SESSION['loginCliente']) && $_SESSION['loginCliente']){ 
                ?>
                        <p class="comprar">
                            <a href="comprar.php?idProduto=<?php echo $produto['id']; ?>" class="botao-comprar"> <img src="img/comprar1.png" onMouseOver="src='img/comprar2.png'" onMouseOut="src='img/comprar1.png'" height="90px"> </a>
                        </p>
                <?php } else { 
                ?>
                        <!--se n estiver autenticado vai redirecionar para o login passando o id produto-->
                        <p class="comprar">
                            <a href="login.php?idProduto=<?php echo $produto['id']; ?>"> <img src="img/comprar1.png" onMouseOver="src='img/comprar2.png'" onMouseOut="src='img/comprar1.png'" height="90px"> </a>
                        </p>
                <?php } 
                ?>
            </div>
        </div>

        <?php 
            include "includes/rodape.php";
        ?>

    </div>

</body>

</html>
