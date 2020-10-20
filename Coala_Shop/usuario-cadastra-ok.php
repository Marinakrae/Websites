<?php
    session_start();
	include "includes/conexao.php";	

	if ($_POST['nome']!="" && $_POST['senha']!="" && $_POST['email']!="") {

        $nome = $_POST['nome'];
		$senha = md5($_POST['senha']);
        $senha_confirm = md5($_POST['senha_confirm']);
		$email = $_POST['email'];
        $data_nasc =$_POST['data_nasc'];
        $telefone = $_POST['telefone'];

        if ($senha == $senha_confirm){ //confirmacao de senha
            
                $sql = "INSERT INTO usuario(nome, senha, email, data_nasc, telefone, admin)  
                             VALUES ('$nome', '$senha', '$email', '$data_nasc', '$telefone', 0);"; //Td mundo q eu cadastrar por dentro sera admin

                $retornoInsert = mysqli_query($conexao, $sql);
                $ultimoId=mysqli_insert_id($conexao);

                //Criar sessao para o usuario
                $sql= "SELECT*FROM usuario WHERE id=$ultimoId";
                $retornoSelect=mysqli_query($conexao,$sql);
                $usuario=mysqli_fetch_array($retornoSelect);

                $_SESSION['loginCliente']=$usuario;

                if(isset($GET['idProduto'])){
                    $location='produto-detalhe.php?id='.$_GET['idProduto']; //assim volta pra qual produto tava antes
                }

                if(isset($retornoInsert)) {
                    header('Location:aviso.php?aviso=4');	
                } else {
                    header('Location:aviso.php?aviso=5');
                }

                mysqli_close($conexao);
        } else {
            header('Location:aviso.php?aviso=6');
        }
        
    } else {
            header('Location:aviso.php?aviso=7');
            }	
?>
