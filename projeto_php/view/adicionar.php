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

            <h1 id="titulo">Cadastro de alunos</h1>
            <p id="conteudo">informe nome e email</p>

            <?php
                require_once '../model/auth.php';
                require_once '../model/mansagens.php';
                $msg = getMensagem();

                if($msg){
                    echo "<div class='". $msg["tipo"] . "'> ". $msg["texto"] . "</div>";
                }
            ?>

            <form action="../controller/cadastro.php" method="post">
                <div class="campo">
                    <label>Nome</label>
                    <input name="nome" id="valor1" type="text">
                </div>

                <div class="campo">
                    <label>email</label>
                    <input name="email" id="valor2" type="text">
                </div>

                <div class="campo">
                    <label>telefone</label>
                    <input name="telefone" id="valor3" type="text">
                </div>

                <div class="campo">
                    <label>Senha</label>
                    <input name="senha" id="valor4" type="text">
                </div>

                <button type="submit">cadastrar</button>

                
            </form>
            <button onclick="mudar_pagina('index.php')">Voltar</button>
        

        </div>
    </body>
</html>