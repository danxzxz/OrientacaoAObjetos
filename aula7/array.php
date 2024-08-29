<?php

    class Robo{
        private string $tipo;
        private string $nome;
        private int $qtdSensores;


        public function __construct($n= "", $t= "", $qtS=0)
        {
            $this->nome = $n;
            $this->tipo = $t;
            $this->qtdSensores = $qtS;
        }



        //MÉTODOS


        public function __toString(){
            // return "Aqui temos um objeto do tipo robô \n";
            return $this->nome . "-" . $this->qtdSensores . "\n";
        }

        /**
         * Get the value of tipo
         */
        public function getTipo(): string
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         */
        public function setTipo(string $tipo): self
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of qtdSensores
         */
        public function getQtdSensores(): int
        {
                return $this->qtdSensores;
        }

        /**
         * Set the value of qtdSensores
         */
        public function setQtdSensores(int $qtdSensores): self
        {
                $this->qtdSensores = $qtdSensores;

                return $this;
        }
    }

$robo1 = new Robo();
$robo1->setNome("Máquina Mistério")
    ->setTipo("Arduino") 
    ->setQtdSensores(4);

$robo2 = new Robo();
$robo2->setNome("charles")
    ->setTipo("Lego") 
    ->setQtdSensores(2);

$robo3 = new Robo();
$robo3->setNome("Juliette")
    ->setTipo("Arduino") 
    ->setQtdSensores(3);

 $robos = array($robo1, $robo2);
// echo $robos[1]->getNome() . "\n";

array_push($robos, $robo3);
// echo $robos[2]->getTipo() . "\n";
// echo $robos[2];

array_push($robos, new Robo("Laercio", "Arduino" , 3));



//foreach
 foreach($robos as $r)
 echo $r->getNome() . " - ". $r->getTipo() .  " - " . $r->getQtdSensores() .  "\n";

// $algumRobo = $robos[3];
// echo $algumRobo->getTipo();
