<!-- Inicio do menu -->
<?php include_once('./php/includes/menu.php')?>
<!-- Fim do menu -->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
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
        <div class="container m-2 p-0" style="height: 55vh">
            <div>
                <h2><span id="msg_abertura"></span> Seja bem vindo(a)!</h2>
                <p>Aqui em nossa loja, programadores tem desconto nos produtos para sua casa!</p>
            </div>
        </div>
        
    </body>
</html>
<?php include_once('./php/includes/footer.php') ?>