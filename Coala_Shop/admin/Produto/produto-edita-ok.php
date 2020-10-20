<h1>Editar Produto</h1>

<?php

    if ( $_POST['nome']!="" && $_POST['descricao']!="" && $_POST['preco']!=""&& $_POST['quantidade']!="" && $_POST['id']!="") {

    include "conexao.php";

    //faz um update no banco de dados para atualizar os valores
        
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];    
        
    $sql = "UPDATE produtos
    SET nome = '$nome',
    descricao = '$descricao',
    quantidade = '$quantidade',
    valor = '$preco'
    WHERE id = $id;";
        
    $retornoUpdate = mysqli_query($conexao, $sql);
        
    if($retornoUpdate) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro!";
    }
        mysqli_close($conexao);
    } else {
        echo "Opss! Tente novamente! Mas agora preenchendo todos os campos!";
    }
?>
    <br>
    <a href="produto-lista.php">Listar Produtos</a>
