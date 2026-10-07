<?php

require_once __DIR__ . "/../model/produto.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];

if(Produto::inserir ($nome,$preco)){
    echo "ok";
}else{
    echo "erro";
}


?>