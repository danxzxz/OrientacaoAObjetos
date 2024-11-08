<?php
require_once("modelo/Mago.php");    

    class Combatente extends Mago{

        private $forcaDeAtaque;

        public function lancarPoder(){
            return "---------\nO mago ".$this->nome .
            ", do tipo Combatente, possui força de Ataque ". $this->forcaDeAtaque .
            " e lançou o poder --" . $this->poder->getDescricao().
            "-- com força total de ".$this->poder->getForcaTotal($this->forcaDeAtaque). "\n---------";
        }
    

        /**
         * Get the value of forcaDeAtaque
         */
        public function getForcaDeAtaque()
        {
                return $this->forcaDeAtaque;
        }

        /**
         * Set the value of forcaDeAtaque
         */
        public function setForcaDeAtaque($forcaDeAtaque): self
        {
                $this->forcaDeAtaque = $forcaDeAtaque;

                return $this;
        }
}