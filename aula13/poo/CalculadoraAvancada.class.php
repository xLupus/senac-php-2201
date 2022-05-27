<?php
require_once 'Calculadora.class.php';

class CalculadoraAvancada extends Calculadora{

    public function __construct($n1,$n2)
    {
        parent::__construct($n1,$n2);
    }

    public function multiplicacao():?int
    {
        return $this->n1 * $this->n2;       
    }

    public function divisao():?float
    {
        return $this->n1 / $this->n2;       
    }

    public function soma():int
    {   
        if($this->n1 % $this->n2 == 0)
            echo "Deu par";
        else    
            echo "Deu Impar";
                
        return $this->n1 + $this->n2;
    }
}
/*
 Assinatura do metodo = O que ele recebe e o que ele devolve.
 */