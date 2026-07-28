<!DOCTYPE html>
<html>
    <head>
        <title>Título</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/script.js"></script>
    </head>
    <body>
        <div class="container">

            <h1 id="titulo">Menu Principal</h1>
            <p id="conteudo">Conteúdo</p>
            
            <?php
                require_once '../model/auth.php';
                require_once '../model/mansagens.php';
                $msg = getMensagem();

                if($msg){
                    echo "<div class='". $msg["tipo"] . "'> ". $msg["texto"] . "</div>";
                }
            ?>

            <!-- Adicionar novos botoes conforme vcs forem criando novas paginas -->
            <button onclick="mudar_pagina('visualizar.php')">Visualizar</button>
            <button onclick="mudar_pagina('adicionar.php')">Adicionar</button>
            <button onclick="window.location.href='../model/logout.php'">sair</button>
        

        </div>
    </body>
</html>