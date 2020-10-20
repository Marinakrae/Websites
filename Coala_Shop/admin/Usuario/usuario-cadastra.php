<DOCTYPE html>
<html lang="pt-br">
   <head>
        <title>Cadastro</title>
   </head>
   <body>
        <h1> Cadastro de Usuário</h1>
        <form role="form" action="usuario-cadastra-ok.php" method="POST"> <!-- Os dados vão para essa página -->
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome"> <!--placeholder é tipo o preenchmento automático-->
            <br>
            <label>Senha</label>
            <input type="password" name="senha"> 
            <br>
            <label>E-mail</label>
            <input type="email" name="email"> 
            <br>
          <button type="submit"> Salvar</button>    
       </form>
       <br>
       <a href="usuario-lista.php">Listar usuários</a>
   </body>
</html>
</DOCTYPE>





