<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
// Definindo o que a classe precisa ter = ATRIBUTOS / PROPRIEDADES
    private Titular $titular;
    private float $saldo;
    public static int $numeroDeContas = 0;

// Definindo métodos mágicos da classe = Irão inicializar/rodar sempre que a classe for instanciada / quando for criado um objeto 

    public function __construct(Titular $titular)
    {
       $this->titular = $titular;
       $this->saldo = 0;  

       self::$numeroDeContas++ ;
       echo "Construtor: conta nova foi criada" . PHP_EOL;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

// Definindo comportamentos da classe = MÉTODOS

    abstract protected function percentualTarifa(): float;

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
           throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorASacar;   
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new \InvalidArgumentException();
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