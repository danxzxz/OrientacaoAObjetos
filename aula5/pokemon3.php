<?php

class Pokemon {
    //Atributos: características
    public $nome;
    public $tipo;
    
    //public $ataque;
    //public $defesa;
    //public $velocidade;

    public $nivel;
    public $pontosVida;
    public $experiencia;

    //Construtor
    function __construct() {
        $this->nivel = 1;
        $this->pontosVida = 10;
        $this->experiencia = 0;
    }

    //Métodos: ações
    function batalhar() {
        $this->aumentarExperiencia(5);  
    }

    function aumentarNivel() {
        $this->nivel = $this->nivel +1;
        $this->aumentarPontosVida();
        $this->experiencia = 0;
    }

    function aumentarPontosVida() {
        $this->pontosVida = $this->nivel * 10;
    }

    function aumentarExperiencia($exp) {
        $this->experiencia += $exp;
        if($this->experiencia >= 100)
            $this->aumentarNivel();
    }
    function __toString(){
        
         $dados ="\nNome: ". $this->nome;
         $dados .= "\nTipo: ". $this->tipo;
         $dados .= "\nNivel: ". $this->nivel;
         $dados .= "\nHP: ". $this->pontosVida;
         $dados .= "\nXP: ". $this->experiencia . "\n\n";

         return $dados;


        
        // print "\nNome: ". $this->nome;
        // print "\nTipo: ". $this->tipo;
        // print "\nNivel: ". $this->nivel;
        // print "\nHP: ". $this->pontosVida;
        // print "\nXP: ". $this->experiencia . "\n\n";


    }



}//FINAL classe Pokemon


//Programa principal
$psyduck = new Pokemon();
$psyduck->nome = "Psyduck";
$psyduck->tipo = "Aquático";



$lucario = new Pokemon();
$lucario->nome = "Lucario";
$lucario->tipo = "Lutador";
$num = readline ("Quantas batalhas eles irão realizar? ");
for ($i=0; $i < $num; $i++) { 
    $psyduck->batalhar();
    $lucario->batalhar();
}
echo "Os pokemons batalharam\n";
echo $psyduck;
echo $lucario;
