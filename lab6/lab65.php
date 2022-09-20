<?php 
    class ClaseBase {
        public function test(){
            echo "ClaseBase::test() llamada\n";
        }
        final public function masTests(){
            echo "ClaseBase::masTests() llamada\n";
        }

    }

    class ClaseHijo extends ClaseBase {
        public function masTests(){
            echo "ClaseHijo::masTests() llamada\n";
        }
    }
    //La salida es un "Fatal error", debido a que la clase "ClaseHijo"
    //esta tratando de sobreescribir un metodo final de la clase Padre
    //cuando final no permite sobreescribir el metodo.
?>