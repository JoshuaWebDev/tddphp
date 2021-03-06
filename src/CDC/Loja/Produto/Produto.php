<?php

namespace CDC\Loja\Produto;

class Produto
{
    private $nome;
    private $valorUnitario;
    private $quantidade;

    /**
     * @codeCoverageIgnore
     * @param type $nome
     * @param type $valorUnitario
     * @param type $quantidade
     */
    public function __construct($nome, $valorUnitario, $quantidade = 1)
    {
        $this->nome          = $nome;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade    = $quantidade;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    function getQuantidade()
    {
        return $this->quantidade;
    }

    function getValorTotal()
    {
        return $this->valorUnitario * $this->quantidade;
    }
}