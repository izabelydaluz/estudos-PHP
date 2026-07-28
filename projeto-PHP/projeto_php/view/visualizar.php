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

            <h1 id="titulo">Título</h1>
            <p id="conteudo">Conteúdo</p>

            <form method="post">
                <div class="campo">
                    <label>ID</label>
                    <input name="v1" id="valor1" type="text">
                </div>
                <div class="resultado" id="resultado">Resultado</div>

                <button type="submit">Buscar</button>

                
            </form>
            <button onclick="mudar_pagina('index.php')">Voltar</button>
            <?php  

                require_once '../model/auth.php';
            
            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                require_once '../model/aluno.php';

                $usuarios = aluno::buscar_dados();

                foreach($usuarios as $us){
                    echo "Id: " . $us["id_aluno"] . "Nome:" . $us["nome"] . "<br>";
                }

                   
            }
            
            ?>


        </div>
    </body>
</html>