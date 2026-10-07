<?php

require_once __DIR__ . "/../model/produto.php";

$produtos = Produto::listar();

header("Content-Type: application/json");
echo json_encode($produtos);
?>