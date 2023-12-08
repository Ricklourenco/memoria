<?php
    $banco = "ricardo";

    $usuario = "root";

    $senha = "";

    $host = "localhost";

    $mysqli = new mysqli($host, $usuario, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Connect faliled: " . $mysqli->connect_error;
        exit();
    }
?>
