<html>
<div class="flex-cabecalho">

    <div style="flex-grow: 1">
        <!--o que tiver nessa div terá a proporção 1. Só pode ser inteiro -->
        <img src="img/Menu.png" height="30px" />
        <a href="index.php"> <img src="img/logo coala shop.png" height="40px" /> </a>
        <a href="admin/index.php">admin </a>
    </div>

    <div style="flex-grow: 9">
        <?php //o que essa parte faz? É o mesmo teste do carrinho
            if (isset($_SESSION['loginCliente']) && $_SESSION['loginCliente']){ ?>
                <a href="login.php"><img src="img/Usuario.png" height="40px"/></a>
           <?php } else { ?>
                <a href="login.php"><img src="img/Usuario.png"height="40px"/></a>
            <?php }
        ?>

        <?php
        //Só exibe o carrinho depois do login
        if(isset($_SESSION['loginCliente']) && $_SESSION['loginCliente']) { ?>
            <a href="carrinho.php"><img src="img/Carrinho.png" height="40px"/></a>
        <?php } else { 
            echo '';
        }
        ?>
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
