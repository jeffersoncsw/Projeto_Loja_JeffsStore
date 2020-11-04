<?php
    require_once 'db_connect.php';

    $sql = "SELECT * FROM produto";
    $result = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $categoria = $row['categoria'];
        $descricao = $row['descricao'];
        $preco = $row['preco'];
        $precofinal = $row['precofinal'];
        $imagem = $row['imagem'];
    }

?>
