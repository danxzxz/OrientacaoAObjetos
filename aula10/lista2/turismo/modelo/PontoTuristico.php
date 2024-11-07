<?php
require_once("modelo/Espaco.php");

class PontoTuristico extends Espaco{

    private $duracaoDaVisita;

    public function getDadosPontoTuristico()
    {
        $dados = "\nPONTO TURÍSTICO \n - Nome: " . $this->nome;
        $dados .= "\n - Endereço: " . $this->endereco;
        $dados .= "\n - Duração da visita: " . $this->duracaoDaVisita;
        return $dados . "\n";
    }
    

    /**
     * Get the value of duracaoDaVisita
     */
    public function getDuracaoDaVisita()
    {
        return $this->duracaoDaVisita;
    }

    /**
     * Set the value of duracaoDaVisita
     */
    public function setDuracaoDaVisita($duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }
}