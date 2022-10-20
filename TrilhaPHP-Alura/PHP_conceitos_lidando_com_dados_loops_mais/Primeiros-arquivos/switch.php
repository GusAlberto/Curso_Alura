<?php
/* 
- Quando formos colocar strings com somente uma sentença, sem variáveis, utilizamos aspas simples
- Para fazer comparação de identidade o Switch não é a melhor opção.
  Pois irá testar igualdade, não identidade dos valores.
*/

$nome = "Gustavo";
$cargo = "Estagiário";

if ($nome == 'Gustavo') {
    
    echo "Decisão if: Este é o meu nome";
} elseif ($nome == "Estagiário") {
    echo "Decisão if: Não...Este é meu cargo";
}

echo PHP_EOL;

switch ($cargo) {
    case "Gustavo":
        echo "Decisão Switch: Este é o meu nome";
    break;
    case "Estagiário":
        echo "Decisão Switch: Este é meu cargo";
    break;
    default:
        echo "Decisão Switch: Nothing...";
}