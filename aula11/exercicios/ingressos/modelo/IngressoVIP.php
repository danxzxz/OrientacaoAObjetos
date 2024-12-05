<?php

require_once 'Ingresso.php';

class IngressoVIP extends Ingresso {
    protected $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor); // chama o construtor da classe pai
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorTotal(): float {
        return $this->valor + $this->valorAdicional;
    }
}