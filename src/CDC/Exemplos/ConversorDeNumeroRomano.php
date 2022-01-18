<?php

namespace CDC\Exemplos;

/**
 * Os números romanos são representados por 7 diferentes símbolos:
 * I - unus (1)
 * V - quinque (5)
 * X - decem (10)
 * L - quiquaginta (50)
 * C - centum (100)
 * D - quingenti (500)
 * M - mille (1000)
 * 
 * Algarismos de menor ou igual valor à direita são somados ao algarismo de maior valor
 * Algarismos de menor valor à esquerda são subtraídos do algarismo de maior valor
 * Nenhum símbolo pode ser repetido lado a lado por mais de 3 vezes
 */

class ConversorDeNumeroRomano
{
    protected $tabela = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    public function converte($numeroEmRomano)
    {
        $acumulador = 0;
        $ultimoVizinhoDaDireita = 0;
        
        for($i = strlen($numeroEmRomano) - 1; $i >= 0; $i--) {

            // pega o inteiro referente ao simbolo atual
            $atual = 0;

            $numCorrente = $numeroEmRomano[$i];
            
            if ( array_key_exists($numCorrente, $this->tabela) ) {
                $atual = $this->tabela[$numCorrente];
            }

            // se o da direita for menor, o multiplicaremos 
            // por -1 para torná-lo negativo
            $multiplicador = 1;
            
            if ($atual < $ultimoVizinhoDaDireita) {
                $multiplicador = -1;
            }

            $acumulador += ($atual * $multiplicador);

            // atualiza o vizinho da direita
            $ultimoVizinhoDaDireita = $atual;
        }

        return $acumulador;
    }

}