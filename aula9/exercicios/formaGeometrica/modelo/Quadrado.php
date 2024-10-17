<?php
require_once("IFormaGeometrica.php");

    class Quadrado implements IFormaGeometrica{
        private $lado;

        public function __toString()
        {
            return $this->getArea();
        }
        public function getArea(){
            $areaQ = ($this->lado * $this->lado);
            return $areaQ;
        }

        public function getDesenho(){
            $desenho = 
"           ************\n
            *          *\n
            *          *\n
            *          *\n
            ************";
            return $desenho;
        }

        /**
         * Get the value of lado
         */
        public function getLado()
        {
                return $this->lado;
        }

        /**
         * Set the value of lado
         */
        public function setLado($lado): self
        {
                $this->lado = $lado;

                return $this;
        }
}