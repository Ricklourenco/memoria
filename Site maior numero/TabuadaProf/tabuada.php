<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabuada com For - PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>        
        <div class="container text-center">
            <h1>Tabuada com For - PHP</h1>
            <br>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="">Digite um número</label>
                    <input type="text" name="bt_numero" id="">
                </div>
                <input class="btn btn-success" type="submit">
                <hr>
                <?php
                    $tabuada = 0;
                    if(isset($_POST["bt_numero"])){
                        $tabuada = $_POST["bt_numero"];

                        for ($i=0; $i <= 10; $i++) { 
                            $resultado = $tabuada * $i;
                            echo ("$tabuada X $i = " . $resultado);
                            echo ("<br>");
                        }
                    }
                ?>
            </form>
        </div>


        



        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>