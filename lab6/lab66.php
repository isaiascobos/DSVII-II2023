<?php
    final class ClaseBase {
        public function test() {
            echo "ClaseBase::test() Llamada\n";
        }
        //Aquí da igual si se declara el método como final o no
        final public function moreTesting(){
            echo "ClaseBase::moreTesting() llamada\n";
        }
    }

    class ClaseHijo extends ClaseBase {
        
    }
?>