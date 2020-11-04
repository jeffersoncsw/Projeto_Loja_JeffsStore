<?php

    require_once "db_connect.php";

    if(isset($_POST['enviar'])){
        $name = $_POST['name'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $valor_unitario = $_POST['valor_unitario'];
        $quantidade = $_POST['quantidade'];
        $valor_total = $_POST['valor_total'];

        $sql = "INSERT INTO pedidos VALUES(null, '$name', '$endereco', '$telefone', '$produto', '$valor_unitario', '$quantidade', '$valor_total');";
        mysqli_query($connect, $sql);

        
        header("Location: ../includes/pedidos.php");

    }
?>