<?php

require_once 'IngressoVIP.php';

class IngressoCamarote extends IngressoVIP {
    private float $valorAdicionalCamarote;

    public function __construct($valor, $valorAdicional, $valorAdicionalCamarote) {

        parent::__construct($valor, $valorAdicional); //chama o construtor da classe vip
        $this->valorAdicionalCamarote = $valorAdicionalCamarote;
    }

    public function getValorTotal(): float {
        // Soma valor do ingresso normal, VIP e camarote
        return parent::getValorTotal() + $this->valorAdicionalCamarote;
    }
}