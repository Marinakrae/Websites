<!DOCTYPE html> 
<html lang="pt-br">
	<head>
		<title>Cadastro</title>
	</head>
    <body>        
    	<h1> Cadastro de Usuário </h1>	          
		<form action="usuario-cadastra-ok.php" method="POST">
		        <label>Nome</label>
		        <input type="text" name="nome" placeholder="Nome">
		        <br>
		        <label>Senha</label>
		        <input type="password" name="senha" >
				<br>
		        <label>E-mail</label>
		        <input type="email" name="email">
	            <br>
		    <button type="submit" >Salvar</button>
		</form> 
		<br>
		<a href="usuario-lista.php">Listar Usuários</a>                       
	</body>
</html>