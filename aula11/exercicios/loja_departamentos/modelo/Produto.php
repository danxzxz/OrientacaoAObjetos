<?php

class Produto {
    protected $descricao;
    protected $unidadeMedida;

    public function __construct($descricao, $unidadeMedida) {
        $this->descricao = $descricao;
        $this->unidadeMedida = $unidadeMedida;
    }

    public function getDados(): string {
        return "Descrição: " . $this->descricao . ", Unidade de Medida: " . $this->unidadeMedida;
    }
}