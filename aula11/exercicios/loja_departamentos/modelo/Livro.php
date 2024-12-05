<?php

require_once 'Produto.php';

class Livro extends Produto {
    private $autor;

    public function __construct($descricao, $unidadeMedida, $autor) {
        parent::__construct($descricao, $unidadeMedida);
        $this->autor = $autor;
    }

    public function getDados(): string {
        return parent::getDados() . ", Autor: " . $this->autor;
    }
}