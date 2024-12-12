<?php

require_once ("Veiculo.php");


  class Onibus extends Veiculo {

    public function ValorViagem() {

        return $this->aluguel + ($this->ValorKMrodado * $this->KMsrodados);

    }
    
  }