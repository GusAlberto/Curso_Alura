<?php   

namespace Alura\Interfaces;

/** 
* Interface, em resumo, é uma abstract class;
* Com todos os seus métodos também sendo abstratos.
*/

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}