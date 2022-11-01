<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\AcessoPropriedades;

/**
 * Class Endereco
 * @property-read string $rua
 * @property-read string $numero
 * @property-read string $bairro
 * @property-read string $cidade
 */

final class Endereco
{
    //Utilizando uma trait para acessar as propriedades diretamente
    //use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

//---> GETTERS AND SETTERS (Métodos de acesso) <---- */
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua},
                {$this->numero},
                {$this->bairro}, 
                {$this->cidade}";
    }
}
;   