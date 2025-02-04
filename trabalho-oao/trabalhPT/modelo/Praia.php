<?php
require_once "PontoTuristico.php";

class Praia extends PontoTuristico {
    public function getTipo(): string {
        return "Praia";
    }
}
?>
