<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa,CPF};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }
    
    abstract public function calculaBonificacao(): float;

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

//---> GETTERS AND SETTERS (Métodos de acesso) <---- */

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

};