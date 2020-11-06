<?php include_once('./php/includes/menu.php')?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Pedidos - Jeff's Store</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-6 mx-auto jumbotron p-3 my-3 align-items-center">
                <p class="display-4">Pedidos</p>
                <hr class="my-2">
                <form class="form" method="POST" action="./php/actions/enviar_pedidos.php">
                    <div class="form-group">
                        <div class="mt-2"><h4>Envio de Pedidos</h4></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input class="form-control" type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço: </label>
                        <input class="form-control" type="text" id="endereco" name="endereco">
                    </div>
                    <div class="form-row form-group">
                        <div class="col-6">
                            <label for="telefone">Telefone: </label>
                            <input class="form-control" type="number" id="telefone" name="telefone">
                        </div>
                        <div class="col-6">
                            <label for="produto">Produto: </label>
                            <input class="form-control" type="text" id="produto" name="produto">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-4">
                            <label for="valor_unitario">Valor unitário: </label>
                            <input class="form-control" type="text" id="valor_unitario" name="valor_unitario">
                        </div>
                        <div class="col-4">
                            <label for="quantidade">Quantidade: </label>
                            <input class="form-control" type="number" id="quantidade" name="quantidade">
                        </div>
                        <div class="col-4">
                            <label for="valor_total">Valor Total: </label>
                            <input class="form-control" type="text" id="valor_total" name="valor_total">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar" onclick="enviar_pedido()">Enviar</button>
                </form>
            </div>     
        </div>
    </body>
    <?php include_once('./php/includes/footer.php')?>
</html>