<h1>Cadastro de Usuário</h1>
<?php

 include "includes/conexao.php";

    //validar campos
    if($_POST['nome']!=""&$_POST['senha']!=""&$_POST['email']!=""){
        
         $nome=$_POST['nome'];
         $senha=$_POST['senha'];
         $email=$_POST['email'];

        $sql= "INSERT INTO usuario(nome, senha, email, admin) VALUES ('$nome','$senha', '$email', '1');";
        
        $retornoInsert=mysqli_query($conexao, $sql);
        
        if($retornoInsert) {
            echo "Registro salvo com sucesso!";
        } else {
            echo "Erro ao salvar registro!";
        }
        
        mysqli_close($conexao);
        
    }else {
        echo "Ops! Tente novamente! Mas agora preenchendo todos os campos!";
        echo "<a href=\"usuario-cadastra.php\> Cadastro de usuários </a>";
    }
?>

    <a href="usuario-lista.php">Lista Usuário</a>
     
