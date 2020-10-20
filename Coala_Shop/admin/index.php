<?php
//inicia a sessão 
session_start();
$_SESSION['login']=false;

$msg = "";
if(isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['senha']) && $_POST['senha'] != "") {
    
    include "includes/conexao.php";
    
    $email=$_POST['email'];
    $senha=md5($_POST['senha']);
    $sql="SELECT * FROM usuario where email='$email' and senha= '$senha'";
    $resultado=mysqli_query($conexao, $sql);
    
    if($resultado->num_rows){
        $_SESSION['login']=true;
        header('Location:menu.php');
    } else {
        $msg="Email ou senha inválidos";
    }
}

?>

<h1> Login Admin</h1>
<h2><?php echo $msg; ?></h2>
<form role="form" action="index.php" method="POST">
    <label>E-mail</label>
    <input type="email" name="email">
    
    <label>Senha</label>
    <input type="password" name="senha">
    
    <button type="submit">Login</button>

</form>