<?php   

namespace Alura\Banco\Modelo;

/* Interface, em resumo, é uma abstract class por "completa";
   Com todos os seus métodos também sendo abstratos.
 */
interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}