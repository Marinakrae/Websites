<?php
include "conexao.php";

$sql= 'SELECT * FROM produtos';

$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>

<h1> Lista Produtos </h1>
<table width='80%' border=1>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Valor</th>
        <th>Quantidade</th>
        <th>Deletar</th>
        <th>Editar</th>
    </tr>
  
<?php
while($dados=mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo "<td>".$dados['id']."</td>";
    echo "<td>".$dados['nome']."</td>";
    echo "<td>".$dados['descricao']."</td>";
    echo "<td>".$dados['valor']."</td>";
    echo "<td>".$dados['quantidade']."</td>";
    echo "<td> <a href='produto-deleta.php?id={$dados['id']}'> Deletar </a> </td>";
    echo "<td> <a href='produto-edita.php?id={$dados['id']}'> Editar </a> </td>"; 
    echo "</tr>";
}    
?>
    
</table>    

<br>
<a href="produto-cadastro.php"> Cadastra Produto</a>
<br>
<a href="../menu.php"> Voltar</a>