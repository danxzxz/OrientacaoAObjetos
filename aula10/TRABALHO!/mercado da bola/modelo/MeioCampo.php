<?php
require_once('modelo/IJogador.php');
require_once('modelo/Jogador.php');

class MeioCampo extends Jogador implements IJogador{
    
    private $nivelPasse;
    private $nivelLancamento;
    private $nivelVisaoDeJogo;

    public function __construct($n, $i, $p, $nac, $nv, $nc, $o, $m, $pq, $np, $nl, $nvj) {
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
            $this->nivelPasse = $np;
            $this->nivelLancamento = $nl;
            $this->nivelVisaoDeJogo = $nvj;


        }
    }
    public function getDados(){
        
    }
    /**
     * Get the value of nivelPasse
     */
    public function getNivelPasse()
    {
        return $this->nivelPasse;
    }

    /**
     * Set the value of nivelPasse
     */
    public function setNivelPasse($nivelPasse): self
    {
        $this->nivelPasse = $nivelPasse;

        return $this;
    }

    /**
     * Get the value of nivelLancamento
     */
    public function getNivelLancamento()
    {
        return $this->nivelLancamento;
    }

    /**
     * Set the value of nivelLancamento
     */
    public function setNivelLancamento($nivelLancamento): self
    {
        $this->nivelLancamento = $nivelLancamento;

        return $this;
    }

    /**
     * Get the value of nivelVisaoDeJogo
     */
    public function getNivelVisaoDeJogo()
    {
        return $this->nivelVisaoDeJogo;
    }

    /**
     * Set the value of nivelVisaoDeJogo
     */
    public function setNivelVisaoDeJogo($nivelVisaoDeJogo): self
    {
        $this->nivelVisaoDeJogo = $nivelVisaoDeJogo;

        return $this;
    }
}