<?php

namespace Alura\Banco\Modelo;

/**
 * Undocumented class
 * @property-read string $rua
 * @property-read string $numero
 * @property-read string $bairro
 * @property-read string $cidade
 */

final class Endereco
{
    //Utilizando uma trait para acessar a propriedade diretamente
    use AcessoPropriedades;
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
    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
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
};   