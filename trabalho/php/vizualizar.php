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
$usuario  = "root";
$senha    = "";
$banco    = "cadastro-trabalho";


$conexao = new mysqli($servidor, $usuario, $senha, $banco);


if ($conexao->connect_error){
    die("Erro de conexão: " . $conexao->connect_error);
}
echo "Conectado com sucesso! <br><br>";


$valor1 = $_POST['v1'];
$sql_busca = "SELECT * FROM cadatro";
$resultado = $conexao->query($sql_busca);


echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
      </tr>";

while($registro = $resultado->fetch_assoc()){

    echo "<tr>
            <td>".$registro["nome"]."</td>
            <td>".$registro["email"]."</td>
            <td>".$registro["telefone"]."</td>
          </tr>";
}

echo "</table>";
$conexao->close();

?>

</div>

</body>
</html>