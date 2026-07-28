<?php

require_once  '../model/aluno.php';

require_once '../model/mansagens.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = $_POST['usuario'];

$erros = array();

if (empty($nome)){
    $erros[] = "nome é obrigatorio";
}

if(!empty($erros)){ //pega o erro e transforma em string
    setMensagem('erro',implode('<br>', $erros));  //se der erro ele manda pra tela de cadastro 
    header("Location: ../view/adicionar.php");
    exit; 
}

aluno::cadastrar($nome,$telefone,$email,$senha);

setMensagem("sucesso", "usuario cadastrado com sucesso");

header("Location: ../view/index.php");

?>