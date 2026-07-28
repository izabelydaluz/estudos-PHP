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
        
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "biblioteca";

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);
        
        if ($conexao->connect_error){
            die("erro de conexao: ". $conexao->connerc_error);
        }

        echo "conectado com ! <br>";

        $nome= $_POST['v1'];
        $id = $_POST['v3'];
        $email= $_POST['v2'];
        

        
        $sql = "UPDATE aluno SET nome= '$nome',email = '$email'  WHERE id_aluno = $id";
        $resultado = $conexao->query($sql);

        echo $resultado;

        
        
        ?>


            

        </div>
    </body>
</html>