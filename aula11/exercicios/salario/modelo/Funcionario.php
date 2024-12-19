<?php

abstract class Funcionario {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    abstract public function calcularSalario();

    abstract public function getCargo();

    public function getNome() {
        return $this->nome;
    }
}
