<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Jeff's Store</title>
        <link rel="stylesheet" href="./css/estilo.css" >
        <script>
            function saudacao(){
                data = new Date();
                hora = data.getHours();

                if (hora < 12){
                    document.getElementById("msg_abertura").innerHTML = "Bom dia!";
                }else if(hora < 18){    
                    document.getElementById("msg_abertura").innerHTML = "Boa tarde!";
                }else {
                    document.getElementById("msg_abertura").innerHTML = "Boa noite!";
                }
            }
        </script>

    </head>
    <body onload="saudacao()">
        <!-- Inicio do menu -->
        <?php include_once('./php/includes/menu.php') ?>
        <!-- Fim do menu -->
        <main>
            <h2><span id="msg_abertura"></span> Seja bem vindo(a)!</h2>
            <p>Aqui em nossa loja, programadores tem desconto nos produtos para sua casa!</p>
        </main>
        
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br>
        <footer id="rodape">
            <p id="formasPagamento">Formas de pagamento</p>
            <img src="./Imagens/formas-pagamento.png" alt="Formas de pagamento">
            <p>&copy; Jeff's Store</p>
        </footer>
    </body>
</html>