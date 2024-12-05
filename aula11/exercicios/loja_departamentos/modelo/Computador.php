<?php

require_once 'Produto.php';

class Computador extends Produto {
    private $processador;
    private $memoria;

    public function __construct($descricao, $unidadeMedida, $processador, $memoria) {
        parent::__construct($descricao, $unidadeMedida); 
        $this->processador = $processador;
        $this->memoria = $memoria;
    }

    public function getDados(): string {
        return parent::getDados() . ", Processador: " . $this->processador . ", Memória: " . $this->memoria;
    }
}