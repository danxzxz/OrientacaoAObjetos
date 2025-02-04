<?php
require_once "PontoTuristico.php";

class Monumento extends PontoTuristico {
    public function getTipo(): string {
        return "Monumento";
    }
}
?>
