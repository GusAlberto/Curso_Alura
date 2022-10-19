<?php

class Conta
{
    // Definir dados da conta = atributos
   public string $cpfTitular;
   public string $nomeTitular;
   public float $saldo;

   // Definir dados da função = métodos
   public function sacar($contaASacar, float $valorASAcar)
   {
        if ($valorASAcar > $contaASacar -> $saldo) {
            echo "Saldo indisponível";
        } else {
            $contaASacar -= $valorASAcar; 
            echo "Você sacou: " $valorASacar . PHP_EOL;
            "Seu novo saldo é de: $saldo";
        }
   }
};

;