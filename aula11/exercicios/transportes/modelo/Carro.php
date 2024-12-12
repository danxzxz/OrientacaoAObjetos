<?php

require_once ("Veiculo.php");


  class Carro extends Veiculo {

    public function ValorViagem() {

        return $this->aluguel + ($this->ValorKMrodado * $this->KMsrodados);

    }
    
  }