<?php

$peso = 93;
$altura = 1.85;
$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";

/*

$variacoes = [
    "18.5" => "Abaixo do peso",
    "24.9" => "Peso normal",
    "29.9" => "Sobrepeso",
    "34.9" => "Obesidade grau 1",
    "39.9" => "Obesidade grau 2",
    "40.0" => "Obesidade grau 3"
];

foreach($variacoes as $key => $value){
    //Se a chave for menor que 40, então testa os valores de acordo com o IMC. 
    if((float) $key < 40.0){
        if($imc <= (float) $key){
            echo PHP_EOL."$value";
            break;
        }
    }else{ //Se o IMC for maior ou igual a 40
        echo PHP_EOL."$value";
    }
}
*/