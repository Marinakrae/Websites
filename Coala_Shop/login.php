<?php 

    session_start();

    $_SESSION['loginCliente']=null;

    $location='index.php';
    $msg="";

    if(isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['senha']) && $_POST['senha'] != "") {
        
        if(isset($_GET['idProduto'])){
            $location='produto-detalhe.php?id='.$_GET['idProduto'];
        } //aqui vai pegar a pagina em que estava antes de fazer o login 
        
        include "includes/conexao.php";
        
        $email=$_POST['email'];
        $senha = md5($_POST['senha']);
		$sql= "SELECT * FROM usuario where email= '$email' && senha = '$senha'";

        $resultado=mysqli_query($conexao,$sql);
        
        $usuario=mysqli_fetch_array($resultado);
        
        if(mysqli_num_rows($resultado)){
            $_SESSION['loginCliente']=$usuario; //sessão recebe os dados do usuario
            header('Location:'.$location); //aqui passaria para a pagina do produto onde estava
        } else {
            header('Location:aviso.php?aviso=1');
        }
    }

    /*
    mysqli_close($conexao); */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="autor" content="Marina" />
    <title> Login | Cadastro </title>
    <link rel="stylesheet" href="estilo.css" />
<link rel="icon" type="imagem/png" href="img/favicon.ico" />
</head>

<body>
    <div class="flex-container">

        <?php 
            include "includes/cabecalho.php";
        ?>

        <div class="flex-corpo">

            <h1>
                <?php echo $msg ?>
            </h1>

            <div id="divLogin">
                <h1> Login </h1>

                <form action="" method="POST">
                    <label>E-mail</label>
                    <input type="email" name="email" class="login">
                    <br>
                    <label>Senha</label>
                    <input type="password" name="senha" class="login">
                    <br>
                    <input type="image" src="img/go1.png" onMouseOver="src='img/go2.png'" onMouseOut="src='img/go1.png'" height="70px" alt="Submit">
                </form>
            </div>

            <br>

            <div id="divLogin">
                <h1> Não possui login? Cadastre-se gratuitamente! </h1>

                <?php //caso o cliente tenha comprado o produto sem ter o cadastro, ele primeiro ira se cadastrar e depois ele volta para a pagina do produto para concluir a compra
    
                    if(isset($_GET['idProduto'])){
                        $action='usuario-cadastra-ok.php?idProduto='.$_GET['idProduto'];
                    } else {
                        $action = 'usuario-cadastra-ok.php';
                    }
                ?>

                <form action="<?php echo $action; ?>" method="POST">
                    <label>Nome</label><br>
                    <input type="text" name="nome" class="login">
                    <br>
                    <label>Senha</label><br>
                    <input type="password" name="senha" class="login">
                    <br>
                    <label>Confirmação da senha</label> <br>
                    <input type="password" name="senha_confirm" class="login">
                    <br>
                    <label>E-mail</label><br>
                    <input type="email" name="email" class="login">
                    <br>
                    <label>Data de nascimento</label><br>
                    <input type="date" name="data_nasc" class="login">
                    <br>
                    <label>Telefone</label><br>
                    <input type="number" name="telefone" min="1000000000" max="90000000000" class="login">
                    <br>
                    <input type="image" src="img/go1.png" onMouseOver="src='img/go2.png'" onMouseOut="src='img/go1.png'" height="70px" alt="Submit">
                </form>


            </div>

        </div>

        <?php
            include "includes/rodape.php";
        ?>

    </div>
</body>

</html>
