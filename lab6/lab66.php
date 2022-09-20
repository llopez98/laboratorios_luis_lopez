<?php 
    final class ClaseBase {
        public function test(){
            echo "ClaseBase::test() llamada\n";
        }
        // Aquí da igual si se declara el método como
        //final o no
        final public function moreTesting(){
            echo "ClaseBase::moreTesting() llamada\n";
        }
    }

    class ClaseHijo extends ClaseBase {}

    //En este caso, sucede algo parecido, pero el error se da por
    //que la clase de la que tratamos de extender es final,
    //por lo que no podremos heredar de ella
?>