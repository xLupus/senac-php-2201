<?php

class Calculadora{

    private ?int $n1;
    private ?int $n2;

    public function __construct($n1,$n2)
    {
         $this->n1 = $n1;
         $this->n2 = $n2;
    }

    public function soma():int
    {
        return $this->n1 + $this->n2;
    }

    public function subtracao():int
    {
        return $this->n1 - $this->n2;
    }

    public function __destruct()
    {
        echo "Obrigado pela visita";
    }
}

//unset() = destroi qualquer variavel $

/*
__ = metodos magico e constantes magicas    git p
    __construct()
    __FILE__ = Nome do Arquivo


Sintaxe Metodo
    <visibilidade> <tipoDeDado> <nomeDaVariavel>

Sintaxe Function
    <visibilidade> function <nomeFunction>():TipoDeDadoDeRetorno


visibilidade

    Private
        So é possivel acessar o atributo ou metodo dentro da propria classe

    Protected
        É possivel acessar o atributo ou metodo dentro da propria classe ou qualquer classe tenha herdado

    Public
        É possivel acessar o atributo ou metodo de qualquer lugar 
*/