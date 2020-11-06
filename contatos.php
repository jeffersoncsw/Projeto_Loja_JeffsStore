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
<!-- Inicio do menu -->
    <?php include_once('./php/includes/menu.php') ?>
<!-- Fim do menu -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Contato - Jeff's Store</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
        <div class="container-fluid"  >
            <div class="mt-2"><h2>Contatos</h2></div>
            <hr class="my-2">
            <div class="row menuContatos">   
                <div class="col-sm-6">
                    <img src="./imagens/imagem-email.png"  >
                        contato@jeffsstore.com.br
                </div>
                <div class="col-sm-6">
                    <img src="./imagens/imagem-whatsapp.png" >
                        (11) 98888-9999
                </div>
            </div>
            <div class="container-fluid col-md-6 mx-auto jumbotron p-3 my-3 align-items-center">
                <form class="form" method="POST" action="">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input class="form-control" type="text" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Mensagem: </label>
                        <textarea class="form-control" name="mensagem" placeholder="Digite aqui sua mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar" onclick="enviar()">Enviar</button>
                </form>
            </div>
            
            <hr class="my-2">
            <h4>Mensagens enviadas:</h4>
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
    </body>
    <?php include_once('./php/includes/footer.php')?>
</html>