<?php

require_once  __DIR__ . "/../config/database.php";

class Produto
{

    public static function listar()
    {

        global $conexao;
        $sql = "SELECT * FROM produtos";

        $resultado = $conexao->query($sql);
        $produtos = array();

        while($linha = $resultado->fetch_assoc())
        {
            $produtos[] = $linha;
        }

        return $produtos;
    }


    public static function inserir($nome, $preco){

        global $conexao;

        $sql = "INSERT INTO produtos(nome, preco) VALUES ('$nome','$preco')";

        return $conexao->query($sql);
        

    }

}