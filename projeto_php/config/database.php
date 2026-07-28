<?php
$servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "biblioteca";

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);
        
        if ($conexao->connect_error){
            die("erro de conexao: ". $conexao->connect_error);
        }

?>