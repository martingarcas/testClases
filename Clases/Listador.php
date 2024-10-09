<?php

    class Listador {
     
        public static function listar($productos) {

            foreach ($productos as $producto) {

                if ($producto instanceof iMuestra) {
                    
                    echo $producto->muestra() . '<br>';
                }
            }
        }
    }

?>