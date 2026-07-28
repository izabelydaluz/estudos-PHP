<?php 

if(!isset( $_SESSION)){
    session_start();
}






if(!isset($_SESSION['usuario_id'])){
    header("Location: ../view/index.php");
    exit;
}

?>