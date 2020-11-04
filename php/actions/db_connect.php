<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "juliocesar";
    $banco    = "jeffsstore";

    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$connect) {
        die("Conexão falhada com MySQL: " . mysqli_connect_error());
    }
?>

