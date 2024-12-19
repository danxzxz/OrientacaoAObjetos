<?php

require_once 'Funcionario.php';

class Estagiario extends Funcionario {
    public function calcularSalario() {
        return 1500 * 0.8;
    }

    public function getCargo() {
        return "Estagiário";
    }
}
