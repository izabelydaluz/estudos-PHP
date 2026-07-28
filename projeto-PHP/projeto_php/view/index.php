<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
        <script src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 id="titulo">Login</h1>
        
         <form action="../controller/autenticacao.php" method="post">
                <div class="campo">
                    <label>Usuario</label>
                    <input name="nome" id="usu_nome" type="text">
                </div>
                <div class="campo">
                    <label>Senha</label>
                    <input name="senha" id="usu_senha" type="text">
                </div>
                

                <button type="submit">entrar</button>

                

                
            </form>
</div>
</body>
</html>