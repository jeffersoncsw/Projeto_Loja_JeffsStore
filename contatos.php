<?php
    require_once "php/actions/db_connect.php";

    if (isset($_POST['nome']) && isset($_POST['mensagem'])){
        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO contatos (nome, mensagem) VALUES ('$nome','$mensagem')";
        $result = $connect->query($sql);

        header("Location: ./contatos.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Jeff's Store</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
        <!-- Inicio do menu -->
        <?php include_once('./php/includes/menu.php') ?>
        <!-- Fim do menu -->
        <header>
            <h2>Contatos</h2>
        </header>
        <hr>
        <section class="menuContatos">
            <div>
                <img src="./imagens/imagem-email.png"  >
                    contato@jeffsstore.com.br
            </div>
            <div>
                <img src="./imagens/imagem-whatsapp.png" >
                    (11) 98888-9999
            </div>
        </section>
        <form method="POST" action="">
            <h4>Nome:</h4>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <h4>Mensagem: </h4>
            <textarea name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem"></textarea>
            <br>
            <br>
            <input type="submit" value="Enviar" onclick="enviar()">
        </form>
        <h4>Mensagens enviadas:</h4>
        <div class="container">
            <?php
                $sql = "SELECT * FROM contatos";

                $result = $connect->query($sql);
            
                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                    echo "Data: ", $rows['data'], "<br>";
                    echo "Nome: ", $rows['nome'], "<br>";
                    echo "Mensagem: ", $rows['mensagem'], "<br>";
                    echo "<hr>";
                    }
                }else{
                    echo "Nenhuma mensagem ainda.";
                }
            ?>
        </div>
        <footer id="rodape">
            <p id="formasPagamento">Formas de pagamento</p>
            <img src="./Imagens/formas-pagamento.png" alt="Formas de pagamento">
            <p>&copy; Jeff's Store</p>
        </footer>
    </body>
</html>