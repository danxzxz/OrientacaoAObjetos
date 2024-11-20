<?php
require_once('modelo/IJogador.php');
require_once('modelo/Jogador.php');

class Defensor extends Jogador implements IJogador{
    
    private $nivelDesarme;
    private $nivelFisico;
    private $nivelJogoAereo;
    
    public function __construct($n, $i, $p, $nac, $nv, $nc, $o, $m, $pq, $nde, $nf, $nja) {
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
            $this->nivelDesarme = $nde;   
            $this->nivelFisico = $nf;   
            $this->nivelJogoAereo = $nja;   
        }
    }
    public function getDadosDefensor(){
        $dados = "\n - Nome: " . $this->nome;
        $dados .= "\n - Idade: " . $this->idade;
        $dados .= "\n - Posição: " . $this->posicao;
        $dados .= "\n - Nacionalidade: " . $this->nacionalidade;
        $dados .= "\n - Nivel Velocidade: " . $this->nivelVelocidade;
        $dados .= "\n - Nivel Chute: " . $this->nivelChute;
        $dados .= "\n - Overall: " . $this->overall;
        $dados .= "\n - Multa Recisória (€): " . $this->multa;
        $dados .= "\n - Principais Qualidades: " . $this->principalQualidade;
        $dados .= "\n - nivel Desarme: " . $this->nivelDesarme;
        $dados .= "\n - nivel Fisico: " . $this->nivelFisico;
        $dados .= "\n - nivel Jogo Aéreo: " . $this->nivelJogoAereo;
        return $dados . "\n";
}
public function getDadosMeioCampo(){
    
}
public function getDadosAtacante(){

}
public function getDadosGoleiro(){
   
}
    /**
     * Get the value of nivelDesarme
     */
    public function getNivelDesarme()
    {
        return $this->nivelDesarme;
    }

    /**
     * Set the value of nivelDesarme
     */
    public function setNivelDesarme($nivelDesarme): self
    {
        $this->nivelDesarme = $nivelDesarme;

        return $this;
    }

    /**
     * Get the value of nivelFisico
     */
    public function getNivelFisico()
    {
        return $this->nivelFisico;
    }

    /**
     * Set the value of nivelFisico
     */
    public function setNivelFisico($nivelFisico): self
    {
        $this->nivelFisico = $nivelFisico;

        return $this;
    }

    /**
     * Get the value of nivelJogoAereo
     */
    public function getNivelJogoAereo()
    {
        return $this->nivelJogoAereo;
    }

    /**
     * Set the value of nivelJogoAereo
     */
    public function setNivelJogoAereo($nivelJogoAereo): self
    {
        $this->nivelJogoAereo = $nivelJogoAereo;

        return $this;
    }
}