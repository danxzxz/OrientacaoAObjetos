<?php

class Calculadora{

    //atributos
    private $numA;
    private $numB;

    // public function __toString()
    // {
    //     $calc = "numéros lidos: NumA = " . $this->numA . " e NumB =" . $this->numB;
    //     $calc .= "\nSoma: " . $this->numA + $this->numB;
    //     $calc .= "\nSubtração: " . $this->numA - $this->numB;
    //     $calc .= "\nMultiplicação: " . $this->numA * $this->numB;
    //     $calc .= "\nDivisão: " . $this->numA / $this->numB;
    //     $calc .= "\nResto: " . $this->numA % $this->numB;

    //     return $calc . "\n";
    // }
    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }

    public function Soma(){
    
        $soma =$this->numA + $this->numB;
        return $soma;

    }
    public function Subtracao(){
    
        $sub =$this->numA - $this->numB;
        return $sub;

    }
    public function Multiplicacao(){
    
        $mult =$this->numA * $this->numB;
        return $mult;

    }
    public function Divisao(){
    
        $div =$this->numA / $this->numB;
        return $div;

    }
    public function Resto(){
    
        $resto =$this->numA % $this->numB;
        return $resto;
        
    }
}

$n1 = new Calculadora();
$n1 -> setNumA(readline("Qual o primeiro número? "));
$n1 -> setNumB(readline("Qual o segundo número? "));
echo "\n\n";

    echo "numéros lidos: NumA = " . $n1->getNumA() . " e NumB =" . $n1->getNumB() . 
    "\nSoma: " . $n1->Soma() . 
    "\nSubtração: " . $n1->Subtracao() . 
    "\nMultiplicação: " . $n1->Multiplicacao() . 
    "\nDivisão: " . $n1->Divisao() .
    "\nResto: " . $n1->Resto();

    