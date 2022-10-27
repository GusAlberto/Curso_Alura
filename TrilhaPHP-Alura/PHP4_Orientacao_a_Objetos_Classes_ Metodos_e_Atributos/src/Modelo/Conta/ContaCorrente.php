<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Você não possui saldo para essa operação.";   
            return;
        } 
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
}