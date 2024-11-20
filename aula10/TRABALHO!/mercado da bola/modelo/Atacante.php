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
    public function getDadosAtacante(){
        $dados = "\n - Nome: " . $this->nome;
        $dados .= "\n - Idade: " . $this->idade;
        $dados .= "\n - Posição: " . $this->posicao;
        $dados .= "\n - Nacionalidade: " . $this->nacionalidade;
        $dados .= "\n - Nivel Velocidade: " . $this->nivelVelocidade;
        $dados .= "\n - Nivel Chute: " . $this->nivelChute;
        $dados .= "\n - nivel Drible: " . $this->nivelDrible;
        $dados .= "\n - Overall: " . $this->overall;
        $dados .= "\n - Multa Recisória (€): " . $this->multa;
        $dados .= "\n - Principais Qualidades: " . $this->principalQualidade;
        return $dados . "\n";
}
public function getDadosMeioCampo(){

}
public function getDadosDefensor(){

}
public function getDadosGoleiro(){
   
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