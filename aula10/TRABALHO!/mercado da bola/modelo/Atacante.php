<?php
require_once('modelo/IJogador.php');
require_once('modelo/Jogador.php');

class Atacante extends Jogador implements IJogador{
    
    private $nivelDrible;
    public function __construct($n, $i, $p, $nac, $nv, $nc, $o, $m, $pq, $ndr) {
        {
            $this->nome = $n;
            $this->idade = $i;
            $this->posicao = $p;
            $this->nacionalidade = $nac;
            $this->nivelVelocidade = $nv;
            $this->nivelChute = $nc;
            $this->overall = $o;
            $this->multa = $m;
            $this->principalQualidade = $pq;
            $this->nivelDrible = $ndr;    
        }
    }
    public function getDados(){

    }
    /**
     * Get the value of nivelDrible
     */
    public function getNivelDrible()
    {
        return $this->nivelDrible;
    }

    /**
     * Set the value of nivelDrible
     */
    public function setNivelDrible($nivelDrible): self
    {
        $this->nivelDrible = $nivelDrible;

        return $this;
    }
}