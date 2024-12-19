<?php

abstract class Calculadora {
    protected $numA;
    protected $numB;

    public function __construct($numA, $numB) {
        $this->numA = $numA;
        $this->numB = $numB;
    }

    abstract public function calcular();
}