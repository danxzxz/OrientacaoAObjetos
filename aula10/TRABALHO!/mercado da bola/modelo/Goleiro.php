<?php
require_once('modelo/IJogador.php');
require_once('modelo/Jogador.php');

class Goleiro extends Jogador implements IJogador{
    
    private $nivelDefesa;

    public function __construct($n, $i, $p, $nac, $nv, $nc, $nd, $o, $m, $pq) {
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
            $this->nivelDefesa = $nd;
        


        }
    }
    public function getDados(){
        
    }
    /**
     * Get the value of nivelDefesa
     */
    public function getNivelDefesa()
    {
        return $this->nivelDefesa;
    }

    /**
     * Set the value of nivelDefesa
     */
    public function setNivelDefesa($nivelDefesa): self
    {
        $this->nivelDefesa = $nivelDefesa;

        return $this;
    }
}