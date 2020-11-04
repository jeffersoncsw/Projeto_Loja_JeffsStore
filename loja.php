<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nossas Lojas - Jeff's Store</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
        <!-- Inicio do menu -->
        <?php include_once('./php/includes/menu.php') ?>
        <!-- Fim do menu -->
        <header>
            <h2>Nossas lojas</h2>
        </header>
        <hr>
        <section class="lojas">
            <div onclick="lojas()" class="loja"> 
                <h3>São Paulo</h3>
                <p>Rua Oscar Freire, 540</p>
                <p>Jardins</p>
                <p>(11) 4004-4414</p>
            </div>
            <div onclick="lojas()" class="loja">
                <h3>Guarulhos</h3>
                    <p>Av. Paulo Faccini, 1345</p>
                    <p>5 &ordm; andar</p>
                    <p>Jardim Maia</p>
                    <p>(11) 2414-9999</p>
            </div>
            <div onclick="lojas()" class="loja">
                <h3>Osasco</h3>
                    <p>Av. dos Autonomistas, 2340</p>
                    <p>Cidade de Deus</p>
                    <p>(11) 2222-3333</p>
            </div>


        </section>
        <br><br><br><br>
        <footer id="rodape">
            <p id="formasPagamento">Formas de pagamento</p>
            <img src="./Imagens/formas-pagamento.png" alt="Formas de pagamento">
            <p>&copy; Jeff's Store</p>
        </footer>
    </body>
</html>