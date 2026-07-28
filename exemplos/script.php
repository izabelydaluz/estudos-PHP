<!DOCTYPE html>
<html>
    <head>
        <title>Título</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container">

        <?php
        $valor = $_GET["v1"];
        
        $valor2 = $_GET["v2"];
        

        // $soma = $valor + $valor2;
        //echo "a soma é de: $soma";

        if($valor == "sol" && $valor2 >= 27) {
            echo "ir para a praia";
        }
        
        ?>
            

        </div>
    </body>
</html>