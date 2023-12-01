<?php
    $numero1 = 0;
    $numero2 = 0;
    $numero3 = 0;
    $numero4 = 0;
    $numero5 = 0;
    $numero6 = 0;
    $numero7 = 0;
    $numero8 = 0;
    $numero9 = 0;
    $numero0 = 0;

    if(isset($_POST["bt_numero1"])){
        $numero1 = $_POST["bt_numero1"];
        $numero2 = $_POST["bt_numero2"];
        $numero3 = $_POST["bt_numero3"];
        $numero4 = $_POST["bt_numero4"];
        $numero5 = $_POST["bt_numero5"];
        $numero6 = $_POST["bt_numero6"];
        $numero7 = $_POST["bt_numero7"];
        $numero8 = $_POST["bt_numero8"];
        $numero9 = $_POST["bt_numero9"];
        $numero0 = $_POST["bt_numero0"];

        echo("O nome recebido foi : " . $numero1);
        echo("<br>");
        echo("O endereço recebido foi : " . $numero2);
        echo("<br>");
        echo("A cidade recebida foi : " . $numero3);
        echo("<br>");
        echo("O estado recebido foi : " . $numero4);
        echo("<br>");
        echo("O país recebido foi : " . $numero5);
        echo("<br>");
        echo("O RG recebido foi : " . $numero6);
        echo("<br>");
        echo("O CPF recebido foi : " . $numero7);
        echo("<br>");
        echo("O cartão Sus recebido foi : " . $numero8);
        echo("<br>");
        echo("O título de eleitor recebido foi : " . $numero9);
        echo("<br>");
        echo("O sexo recebido foi : " . $numero0);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>
<body>
    <h1>Informações Exibidas:</h1>
    <a href="cliente.php"> Voltar </a>
</body>
</html>