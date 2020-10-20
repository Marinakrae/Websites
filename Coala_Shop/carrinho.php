<?php
include "includes/conexao.php";
session_start();

//Seleciona pedidos do usuario logado
$sql="
SELECT *
FROM pedidos inner join produtos on pedidos.fk_produto = produtos.id 
WHERE fk_usuario = {$_SESSION['loginCliente']['id']}
";

$hora_ultimo_pedido="
SELECT Max(hora) 
FROM pedidos
"; //pegou a maior hora dos pedidos

$hora_pedido=mysqli_query($conexao,$hora_ultimo_pedido);

$nome_pedido="
SELECT nome
FROM produtos inner join pedidos
WHERE hora = $hora_ultimo_pedido 
"; //pega o nome do produto do pedido com a maior data
                   
$resultado=mysqli_query($conexao,$sql);
$nome_pedido2=mysqli_query($conexao,$nome_pedido);
$valor_total=0;

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="estilo.css" />
    <link rel="icon" type="imagem/png" href="img/favicon.ico" />
</head>

<body>
    <div class="flex-container">

        <?php 
            include "includes/cabecalho.php";
        ?>

        <div class="flex-corpo">

            <div class="pedidos center">
                <h1>Carrinho</h1>
                <br>
                <table border='0' width="100%">
                    <tr>
                        <th>Id pedido</th>
                        <th>Id produto</th>
                        <th>Nome do produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>

                    <?php while($dados=mysqli_fetch_array($resultado)){
                            echo "<tr>";
                            echo "<td>".$dados['id']."</td>";
                            echo "<td>".$dados['fk_produto']."</td>";
                            $dados2=mysqli_fetch_array($nome_pedido2);
                            echo "<td>".$dados2['nome']."</td>";
                            echo "<td> R$".number_format($dados['valor'], 2, ',', '.')."</td>"; //pegar o valor do produto pra x id
                            $valor_total=$valor_total+$dados['valor'];
                            echo "<td><form action='carrinho.php' method='get'><select name='quantidade' method='get'>
                                            <option value='0'>0</option> 
                                            <option value='1' selected='selected'>1</option> 
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option> 
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option> 
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                  </select> </form> </td>";
                            echo "<tr>";
                       }
                     ?>
                </table>

                <?php echo "<br> <h4>Valor total: R$$valor_total,00 <h4>"; ?>
                
                <?php
                      if(isset($_GET['quantidade'])){ //pega o name do form da quantidade
                        $quantidade = $_GET["quantidade"];
                       }
                
                        $produto=$dados['fk_produto'];
                ?>
                
                <a href="update_quantidade.php?quantidade=<?php echo $quantidade; ?>&pedido="<?php echo $produto; ?>> <img src="img/atualizar1.png" onMouseOver="src='img/atualizar2.png'" onMouseOut="src='img/atualizar1.png'" height="80px"> </a>

            </div>
            <?php include "includes/rodape.php"; ?>
        </div>
    </div>
</body>

</html>
