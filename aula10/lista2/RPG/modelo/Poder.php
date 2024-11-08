<?php
require_once("modelo/Mago.php");

    class Poder {
        private $descricao;
        private $forca;


        public function __construct($d, $f) {
        {
            $this->descricao = $d;
            $this->forca = $f;
        }
    }
        public function getForcaTotal($forcaMago){
            $forcaTotal = $forcaMago + ($forcaMago * $this->forca / 100);
            return $forcaTotal;
        }
    
    

        /**
         * Get the value of descricao
         */
        public function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao($descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of forca
         */
        public function getForca()
        {
                return $this->forca;
        }

        /**
         * Set the value of forca
         */
        public function setForca($forca): self
        {
                $this->forca = $forca;

                return $this;
        }
}