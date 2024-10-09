<?php

    require_once 'Producto.php';
    require_once 'Interfaces/iMuestra.php';

    class SmartTv extends Producto implements iMuestra{

        private $pulgadas;
        private $sistemaOperativo;

        public function __construct($name, $pulgadas, $sistemaOperativo) {
            
            parent::__construct($name);
            $this->pulgadas         = $pulgadas;
            $this->sistemaOperativo = $sistemaOperativo;
        }

        public function muestra() {
            
            return "Smart TV: {$this->getName()}, Pulgadas: {$this->pulgadas}, Sistema Operativo: {$this->sistemaOperativo}";
        }
    }

?>