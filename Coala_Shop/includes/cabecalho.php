<html>

<script>
    /* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>

<div class="flex-cabecalho">

    <div style="flex-grow: 1">
        <!--o que tiver nessa div terá a proporção 1. Só pode ser inteiro -->

        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Top Navigation Menu -->
        <div class="topnav">
            <a href="index.php"> <img src="img/logo coala shop.png" height="40px" class="logo" /></a>
            <!-- Navigation links (hidden by default) -->
            <div id="myLinks" class="cinza">
                <a href="index.php">Página inicial</a>
                <a href="login.php">Acesse sua conta</a>
                <a href="promocao.php">Produtos em promoção</a>
                <a href="sobre.php">Sobre a loja</a>
            </div>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <div style="flex-grow: 9">
        <?php 
            if (isset($_SESSION['loginCliente']) && $_SESSION['loginCliente']){ ?>
            <a href="login.php"><img src="img/Usuario.png" height="40px" /></a>
        <?php } else { ?>
            <a href="login.php"><img src="img/Usuario.png" height="40px" /></a>
        <?php }
        ?>

        <?php
            //Só exibe o carrinho depois do login
            if(isset($_SESSION['loginCliente']) && $_SESSION['loginCliente']) { 
        ?>
            <a href="carrinho.php"><img src="img/Carrinho.png" height="40px" /></a>
        <?php } else { 
            echo '';
        } ?>
    </div>

</div>

<form action="index.php" method="GET">

    <div class="flex-cabecalho">

        <div id="divBusca">
            <input type="text" class="busca" name="busca" placeholder=" O que você procura?">
            <input type="image" src="img/Lupa.png" height="15px" name="Lupa">
        </div>
    </div>
</form>

</html>
