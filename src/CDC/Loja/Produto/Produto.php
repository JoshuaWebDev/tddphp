<?php

namespace CDC\Loja\Produto;

class Produto
{
    private$nome;
    private $valor;

    /**
     * @codeCoverageIgnore
     * @param type $nome
     * @param type $valorUnitario
     * @param type $quantidade
     */
    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getValor()
    {
        return $this->valor;
    }
}