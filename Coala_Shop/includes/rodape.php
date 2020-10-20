<html>
<div class="flex-rodape margem">
    <p><a href="index.php" class="rodape">Página inicial</a></p>
    <p><a href="login.php" class="rodape">Acesse sua conta</a></p>
    <p>
        <?php if(isset($_SESSION['loginCliente']) && $_SESSION['loginCliente']){ ?><a href="carrinho.php" class="rodape">Carrinho de compras</a>
        <?php }else { ?> <a href="login.php?idProduto=<?php echo $produto['id']; ?>" class="rodape"> Carrinho de compras </a>
        <?php } ?>
    </p>
    <!--<p><a href="produtos-promocao.php" class="rodape">Produtos em promoção</a></p>-->
    <p><a href="promocao.php" class="rodape">Produtos em promoção</a></p>
    <p><a href="sobre.php" class="rodape">Sobre a loja</a></p>
</div>
<div class="flex-rodape-social">
    <p><a href="https://www.facebook.com/"><img src="img/F.png" height="50px"></a></p>
    <p><a href="https://www.instagram.com/"><img src="img/I.png" height="50px"></a></p>
    <p><a href="https://mail.google.com"><img src="img/G.png" height="50px"></a></p>
</div>
<div class="flex-rodape">
    <p align="center" class="espacamento">Coala Shop - Empresa de comércio de roupas e pelúcias</p>
    <p align="center" class="espacamento"><b>0800 777 1211 </b></p>
    <p align="center" class="espacamento">CNPJ: 01.0999.000/0088-09</p>
    <p align="center" class="espacamento">Inscrição estadual: 20.990.268-0</p>
    <p align="center" class="espacamento">Rua Osvaldo Aranha, 100. Sala 02. Venâncio-aires, RS.</p>
</div>

</html> <a href="login.php?idProduto=<?php echo $produto['id']; ?>">
