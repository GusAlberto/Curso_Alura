<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
// Definindo o que a classe precisa ter = ATRIBUTOS / PROPRIEDADES
    private Titular $titular;
    private float $saldo;
    public static $numeroDeContas = 0;

// Definindo métodos mágicos da classe = Irão inicializar/rodar sempre que a classe for instanciada / quando for criado um objeto 
    public function __construct(Titular $titular)
    {
       $this->titular = $titular;
       $this->saldo = 0;  

       self::$numeroDeContas++ ;
       echo "Conta nova foi criada" . PHP_EOL;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

// Definindo comportamentos da classe = MÉTODOS

    abstract public function percentualTarifa(): float;

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível.";
            return;
        }

        $this->saldo -= $valorASacar;   
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo.";
            return ;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
    
};