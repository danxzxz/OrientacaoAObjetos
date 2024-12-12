<?php

require_once ("Veiculo.php");


  class MicroOnibus extends Veiculo {

    public function __construct($aluguel)
    {
        parent::__construct($aluguel);
        $this->ValorKMrodado = 2.75;
    }

        public function ValorViagem() {

            return $this->aluguel + ($this->ValorKMrodado * $this->KMsrodados);
    
        }
    
        public function getTipo(){
            return "Micro Ônibus";
        }
  }