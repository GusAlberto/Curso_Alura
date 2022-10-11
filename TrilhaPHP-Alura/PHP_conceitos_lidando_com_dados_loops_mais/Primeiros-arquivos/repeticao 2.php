<?php

//Loop de repetição FOR (Para) no contador

/* Todos os casos são a mesma coisa 
$contador = $contador + 1;
$contador += 1;
$contador++;

-> PARA inicializando contador com 1, verifique se ele é menor ou igual a 15
-> Se for execute o código
-> Depois de executar, incremente o contador
-> Depois de incrementar, verifique novamente 
-> E continue no loop até a condição se tornar falsa (=<15)


for ($contador = 1 ; $contador <= 15; $contador = $contador + 1) {
    echo "#$contador" . PHP_EOL;    
}

for ($contador = 1 ; $contador <= 15; $contador += 1) {
    echo "#$contador" . PHP_EOL;    
}
*/

echo "Contador sem número 13";
echo PHP_EOL ;
for ($contador = 1 ; $contador <= 15; $contador ++) {
    if($contador == 13) {
        continue;
    }
    echo "#$contador" . PHP_EOL; 
    /*
    else {
        echo "#$contador" . PHP_EOL;
    }
    */
}

echo PHP_EOL ; 
echo "Contador parando antes do número 13";
echo PHP_EOL ; 

for ($contador = 1 ; $contador <= 15; $contador ++) {
    if($contador == 13) {
        break;
    }
    echo "#$contador" . PHP_EOL; 
}