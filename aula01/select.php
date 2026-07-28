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

        echo "conectado com sucesso! <br>";

        // $sql = " SELECT * FROM livro";
        // $resultado = $conexao->query($sql);


        // $registro = $resultado->fetch_assoc();
        // echo "Nome 1: " . $registro["titulo"] . "e o autor é: " . $registro["autor"];

        // $registro = $resultado->fetch_assoc();
        // echo "Nome 1: " . $registro["titulo"] . "e o autor é: " . $registro["autor"];

        // while($registro = $resultado->fetch_assoc()){
        //     echo "Nome: " . $registro["titulo"] . "e o autor é: " . $registro["autor"] . "<br>";
        // }

        $valor1 = $_POST['v1'];
        $sql_busca = "SELECT * FROM aluno WHERE id_aluno = '$valor1'";

        $resultado = $conexao->query($sql_busca);

        while($registro = $resultado->fetch_assoc()){
            echo "Nome: " . $registro["nome"] . " <br> telefone: " . $registro["telefone"] . "<br>";
        }

        
        ?>


            

        </div>
    </body>
</html>