<?php 
include "includes/conexao.php";

$sql = 'SELECT * FROM usuario';
$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>
<h1>Lista Usuário</h1>      
<table width='100%' border=1>
    <tr>
    	<th>Id</th>
        <th>Nome</th>
        <th>Senha</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php
    while($dados = mysqli_fetch_array($resultado)){         
        echo "<tr>";
        echo "<td>".$dados['id']."</td>";
        echo "<td>".$dados['nome']."</td>";
        echo "<td>".$dados['senha']."</td>";
        echo "<td>".$dados['email']."</td>";    
        echo " <td> <a href='usuario-edita.php?id={$dados['id']}'>Editar</a>  ";  
        echo "      <a href='usuario-deleta-ok.php?id={$dados['id']}'>Deletar</a>  </td>";
        echo "</tr>";      
    }
    ?>
</table>  
      

<br>
<a href="usuario-cadastra.php">Cadastra Usuário</a>

<br>
<a href="menu.php"> Voltar</a>