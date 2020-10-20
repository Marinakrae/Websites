<h1>Cadastro de Produto</h1>
<?php

include "conexao.php";

    //validar campos
    if($_POST['nome']!=""&$_POST['descricao']!=""&$_POST['valor']!=""&$_POST['quantidade']!=""){
        
         $nome=$_POST['nome'];
         $descricao=$_POST['descricao'];
         $valor=$_POST['valor'];
         $quantidade=$_POST['quantidade'];

        $sql= "INSERT INTO produtos(nome, descricao, valor, quantidade) VALUES ('$nome','$descricao', '$valor', '$quantidade');";
        
        $retornoInsert=mysqli_query($conexao, $sql);
        
        if($retornoInsert) {
            echo "Registro salvo com sucesso!";
        } else {
            echo "Erro ao salvar registro!";
        }
        
        mysqli_close($conexao);
        
    }else {
        echo "Ops! Tente novamente! Mas agora preenchendo todos os campos!";
        echo "<a href=\"produto-cadastra.php\> Cadastro de produtos </a>";
    }
?>

    <a href="produto-lista.php">Lista Produto</a>
     
