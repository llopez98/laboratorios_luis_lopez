<?php
    class Desempeno
    {
        protected $porcentaje;

        function __construct($p)
        {
            $this->porcentaje = $p;
        }

        function printImage()
        {
            if ($this->porcentaje >= 80) {
                return '<img src="img/img01.png" alt="">';
            } elseif ($this->porcentaje >= 50 and $this->porcentaje <= 79) {
                return '<img src="img/img02.png" alt="">';
            } else {
                return '<img src="img/img03.png" alt="">';
            }
        }
    }

    class Factorial
    {
        protected $numero;

        function __construct($num)
        {
            $this->numero = $num;
        }

        function calcularFactorial()
        {
            $factorial = 1;
            for ($i = 1; $i <= $this->numero; $i++) {
                $factorial = $factorial * $i;
            }
            return $factorial;
        }
    }

    class Arreglo{
        protected $elementos = array();

        function __construct($arr)
        {
            $this->elementos = $arr;
        }

        function buscarNumMayor(){
            $mayor = $this->elementos[0];
            for($i = 0; $i < 20; $i++){
                if($this->elementos[$i] > $mayor){
                    $mayor = $this->elementos[$i];
                }
            }
            return $mayor;
        }

        function buscarPosMayor(){
            $mayor = $this->elementos[0];
            $posicion = 0;
            for($i = 0; $i < 20; $i++){
                if($this->elementos[$i] > $mayor){
                    $mayor = $this->elementos[$i];
                    $posicion = $i;
                }
            }
            return $posicion;
        }
    }
?>