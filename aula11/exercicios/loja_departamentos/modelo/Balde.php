<?php

require_once 'Produto.php';

class Balde extends Produto {
    private $capacidade;

    public function __construct($descricao, $unidadeMedida, $capacidade) {
        parent::__construct($descricao, $unidadeMedida); 
        $this->capacidade = $capacidade;
    }

    public function getDados(): string {
        return parent::getDados() . ", Capacidade: " . $this->capacidade;
    }
}