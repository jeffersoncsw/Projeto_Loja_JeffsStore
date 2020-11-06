<?php
    require_once "./php/actions/db_connect.php";
?>
<?php include_once('./php/includes/menu.php')?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Produtos - Jeff's Store</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="mt-2"><h2>Produtos</h2></div>
            <hr class="my-2">
            <div class="row">
                <div class="col-sm-3" id="categorias">
                    <div><h3>Categorias</h3></div>
                    <ul>
                        <li onclick="exibir_todos()">Todos {12}</li>
                        <li onclick="exibir_categoria('notebook')">Notebook {3}</li>
                        <li onclick="exibir_categoria('teclado')">Teclado {2}</li>
                        <li onclick="exibir_categoria('impressora')">Impressora {3}</li>
                        <li onclick="exibir_categoria('tablet')">Tablet {2}</li>
                        <li onclick="exibir_categoria('mouse')">Mouse {2}</li>
                    </ul>
                </div>
                <div class="produtos">
                    <?php
                        $sql = "SELECT * FROM produtos";

                        $result = $connect->query($sql);
                    
                        if($result->num_rows > 0){
                            while($rows = $result->fetch_assoc()){
                    ?>
                    <div class="box_produtos" id="<?php echo $rows["categoria"]; ?>">
                        <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
                        <br>
                        <p class="produtoName"><?php echo $rows["descricao"]; ?></p>
                        <hr>
                        <p class="produtoPrecoAntigo">De: R$ <?php echo $rows["preco"]; ?></p>
                        <p class="produtoPreco">POR: R$ <?php echo $rows["precofinal"]; ?></p><br>
                    </div>

                    <?php
                            }
                        }else{
                            echo "Nenhum produto foi cadastrado.";
                        }
                    ?>
                </div>
            </div>
        </div> 
    <?php include_once('./php/includes/footer.php')?>
</html>

