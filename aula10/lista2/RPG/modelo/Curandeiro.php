<?php
require_once("modelo/Mago.php");    
require_once("modelo/Poder.php");

    class Curandeiro extends Mago{

        private $forcaDeCura;

        public function lancarPoder(){
            return "---------\nO mago ".$this->nome .
            ", do tipo Curandeiro, possui força de Cura ". $this->forcaDeCura .
            " e lançou o poder --" . $this->poder->getDescricao().
            "-- com força total de ".$this->poder->getForcaTotal($this->forcaDeCura) . "\n---------";
        }

        /**
         * Get the value of forcaDeCura
         */
        public function getForcaDeCura()
        {
                return $this->forcaDeCura;
        }

        /**
         * Set the value of forcaDeCura
         */
        public function setForcaDeCura($forcaDeCura): self
        {
                $this->forcaDeCura = $forcaDeCura;

                return $this;
        }
}