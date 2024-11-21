<?php
require_once('modelo/IJogador.php');
require_once('modelo/Jogador.php');

class Goleiro extends Jogador implements IJogador{
    
    protected $nivelDefesa;

    public function __construct($n, $i, $p, $nac, $nv, $nc, $o, $m, $pq, $nd) {
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
    public function getDadosGoleiro(){
        $dados = "\n - Nome: " . $this->nome;
        $dados .= "\n - Idade: " . $this->idade;
        $dados .= "\n - Posição: " . $this->posicao;
        $dados .= "\n - Nacionalidade: " . $this->nacionalidade;
        $dados .= "\n - Nivel Velocidade: " . $this->nivelVelocidade;
        $dados .= "\n - Nivel Chute: " . $this->nivelChute;
        $dados .= "\n - Overall: " . $this->overall;
        $dados .= "\n - Multa Recisória (€): " . $this->multa;
        $dados .= "\n - Principais Qualidades: " . $this->principalQualidade;
        $dados .= "\n - Nivel Defesa: " . $this->nivelDefesa;
        return $dados . "\n";
}
public function getDadosMeioCampo(){
    
}
public function getDadosAtacante(){
    
}
public function getDadosDefensor(){
   
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