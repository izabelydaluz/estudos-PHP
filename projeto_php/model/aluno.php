<?php 

require_once __DIR__ . '/../config/database.php';

class aluno{
    public static function buscar_dados(){

        global $conexao;

        $sql_busca = "SELECT * FROM aluno";
        $resultado = $conexao->query($sql_busca);

        $retorno = $resultado->fetch_all(MYSQLI_ASSOC);
        return $retorno;
        

        
    }

    public static function cadastrar($nome, $email, $telefone,$senha){
        global  $conexao;

        $sql = "INSERT INTO aluno (nome, email, telefone,senha) VALUES('$nome','$email', '$telefone','$senha')";
        $resultado = $conexao->query($sql);
        

        die($conexao->error);
        
    }

    public static function autentificar($usuario,$senha){
        global $conexao;
        $sql_auth = "SELECT * FROM aluno WHERE nome = '$usuario' AND senha='$senha'";
        $resultado = $conexao->query($sql_auth);

        if ($resultado->num_rows >0){
            return $resultado->fetch_assoc();
        }
        return false;
    }
}

?>