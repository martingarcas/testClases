<?php

    class Producto {

        //PROBAR NUMERO DE PRODUCTOS Y DESTRUCTOR

        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

        //PRACTICAR GETTER Y SETTER
        public function getName() {

            return $this->name;
        }

        public function setName($name) {

            $this->name = $name;
        }
    }

?>