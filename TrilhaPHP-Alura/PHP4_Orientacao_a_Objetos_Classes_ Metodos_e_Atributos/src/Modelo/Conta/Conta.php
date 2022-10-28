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

/* 
    abstract public function percentualTarifa(): float
    {
        ;
    }
 */
    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível.";
            return;
        }
        $this->saldo -= $valorASacar;   
    }

    public function deposita(float $valorADepositar): string
    {
        if ($valorADepositar < 0) {
            return "Valor precisa ser positivo.";
        }

        $this->saldo += $valorADepositar;
        $mensagemDeposito =  "$this->saldo";
        
        return $mensagemDeposito;
    }

    public function mostraTitular(): string
    {
        return $this->titular->getNome();
    }

    public function mostraCPF(): string
    {
        return $this->titular->getCPF();
    }

    public function mostraEndereco(): string
    {
        return $this->endereco->getNumero();
    }

    public function mostraSaldo(): string
    {
        return "$this->saldo";
    }

    public static function mostrarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    
}
;