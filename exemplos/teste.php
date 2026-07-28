<?php

    echo "boa tarde";
    echo "<h1> teste </h1>";
    echo "<input>";

    echo "<br>";

    $idade = 17;
    $nome = "iza";
    echo "boa tarde, me chamo " . $nome . " e tenho " . $idade ." anos";

    echo "<br>";

    $valor1 = 5;
    $valor2 = 8;
    $soma = $valor1 + $valor2;
    echo "seu resultado e de: " . $soma;

    $valor1 = 5;
    $valor2 = (string) $valor1;
    var_dump($valor1);
    var_dump($valor2);

    $valor1 = 5;
    $valor2 = "a";
    if($valor1 > 5 && $valor2 == "a"){
        echo "entrou no if";
    }else{
        echo "não entrou no if";
    }

    echo "<br>";
    if($valor1 > 5 ){
        echo "entrou no if";
    }elseif($valor1 == 5){
        echo "entrou no elseif";
    }else{
        echo "não entrou no if";
    }

    for($x=0;$x <10;$x++){
        echo "o numero atual é: $x <br>" ;
    }
?>