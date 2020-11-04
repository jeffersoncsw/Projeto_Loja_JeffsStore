
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pedidos - Jeff's Store</title>
        <link rel="stylesheet" href="../../css/estilo.css">
        <script src="../../js/funcoes.js"></script>
    </head>
    <body>
        <!-- Inicio do menu -->
        <nav class="menu">
            <a href="../../Index.php"><img width="100px"src="../../imagens/Jeff's-Store_logo.png" alt="Jeff's Store"></a>
            <a href="../../produtos.php">Produtos</a>
            <a href="../../loja.php">Nossas lojas</a>
            <a href="../../contatos.php">Contatos</a>
            <a href="#">Pedidos</a>
        </nav>
        <!-- Fim do menu -->
        <header>
            <h2>Pedidos</h2>
        </header>
        <hr>
        <section>
            <h4>Envio de Pedidos</h4>
            <form method="POST" action="../actions/enviar_pedidos.php">
                <label for="name">Nome: </label><br>
                <input type="text" id="name" name="name"><br><br>
                <label for="endereco">Endereço: </label><br>
                <input type="text" id="endereco" name="endereco"><br><br>
                <label for="telefone">Telefone: </label><br>
                <input type="number" id="telefone" name="telefone"><br><br>
                <label for="produto">Produto: </label><br>
                <input type="text" id="produto" name="produto"><br><br>
                <label for="valor_unitario">Valor unitário: </label><br>
                <input type="text" id="valor_unitario" name="valor_unitario"><br><br>
                <label for="quantidade">Quantidade: </label><br>
                <input type="number" id="quantidade" name="quantidade"><br><br>
                <label for="valor_total">Valor Total: </label><br>
                <input type="text" id="valor_total" name="valor_total"><br><br>
                <input type="submit" name="enviar" value="Enviar pedido" onclick="enviar_pedido()">
            <br><br>
            </form>  

        </section>
        <footer id="rodape">
            <p id="formasPagamento">Formas de pagamento</p>
            <img src="../../imagens/formas-pagamento.png" alt="Formas de pagamento">
            <p>&copy; Jeff's Store</p>
        </footer>
    </body>
</html>