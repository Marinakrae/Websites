<h1>Editar Usuário</h1>
<?php 
	
	if ( $_POST['nome']!="" && $_POST['senha']!="" && $_POST['email']!="" && $_POST['id']!="") {

		include "includes/conexao.php";

		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];

		$sql = "UPDATE usuario 
		           SET nome = '$nome', 
		               senha = '$senha', 
		               email = '$email' 
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
<a href="usuario-lista.php">Listar Usuários</a>