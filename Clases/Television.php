<?php

    require_once 'Producto.php';
    require_once 'Interfaces/iMuestra.php';

    class Television extends Producto implements iMuestra{

        private $pulgadas;

        public function __construct($name, $pulgadas) {
            
            parent::__construct($name);
            $this->pulgadas = $pulgadas;
        }

        public function muestra() {
            
            return "Televisión: {$this->getName()}, Pulgadas: {$this->pulgadas}";
        }
    }
?>