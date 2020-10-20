<?php

include "conexao.php";

if ( $_GET['id']!="") {

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$dadosProduto = mysqli_fetch_array($resultado);
mysqli_close($conexao);   
}

?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <title>Editar Produto</title>
    </head>

    <body>
        <h1>Editar Produto</h1>

        <form role="form" action="produto-edita-ok.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dadosProduto['id'] ?>">
            <label>Nome</label>
            <input type="text" name="nome" value="<?php echo $dadosProduto['nome'] ?>">
            <br>
            <label>Descrição</label>
            <input type="text" name="descricao" value="<?php echo $dadosProduto['descricao']

?>">

            <br>
            <label>Preco</label>
            <input type="text" name="preco" value="<?php echo $dadosProduto['valor'] ?>">
            <br>
            <label>Quantidade</label>
            <input type="text" name="quantidade" value="<?php echo $dadosProduto['quantidade'] ?>">
            <br>
            <button type="submit">Salvar</button>
        </form>
        <br>
        <a href="produto-lista.php">Listar Produtos</a>

    </body>

    </html>
