<DOCTYPE html>
<html lang="pt-br">
   <head>
        <title>Cadastro</title>
   </head>
   <body>
        <h1> Cadastro de Produto</h1>
        <form role="form" action="produto-cadastro-ok.php" method="POST"> <!-- Os dados vão para essa página -->
            <label>Nome</label>
            <input type="text" name="nome"> 
            <br>
            <label>Descricao</label>
            <input type="text" name="descricao"> 
            <br>
            <label>Valor</label>
            <input type="text" name="valor"> 
            <br>
            <label>Quantidade</label>
            <input type="text" name="quantidade"> 
            <br>
          <button type="submit">Salvar</button>    
       </form>
       <br>
       <a href="produto-lista.php">Listar produtos</a>
   </body>
</html>
</DOCTYPE>





