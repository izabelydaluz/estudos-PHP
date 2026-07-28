<?php

require_once '../model/aluno.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];


$dados = aluno::autentificar($nome,$senha);

echo $dados;

if($dados){

    $_SESSION['usuario_id'] = $dados['id_aluno'];
    $_SESSION['usuario_nome'] = $dados['nome'];


    header("Location: ../view/sla.php");
    exit;
}
header("Location: ../view/index.php");
exit;
?>