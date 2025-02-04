<?php
require_once "PontoTuristico.php";

class Parque extends PontoTuristico {
    public function getTipo(): string {
        return "Parque";
    }
}
?>
