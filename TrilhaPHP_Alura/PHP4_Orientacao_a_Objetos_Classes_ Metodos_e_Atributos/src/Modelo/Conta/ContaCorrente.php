<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    
    function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            // Caso excepcional
            // Lançar uma exceção
            echo "Você não possui saldo para essa operação.";   
            return;
        } 
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
}