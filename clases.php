<?php

interface IFigura {
    function area();
    function get();
}

abstract class Figura{
    private $msg = 'Hola figura!';
    abstract function area();

    function toString() {
        return $this->msg;
    }
}

class Cuadrado extends Figura {
//class Cuadrado implements IFigura{

    private $arista;

    function __construct( int $arista) {
        $this->arista = $arista;
    }

    function setArista(int $value) {
        $this->arista = $value;
    }

    function getArista(): int {
        return $this->arista;
    }

    function area(): int {
        return pow($this->arista, 2);
    }

}

$cuadrado = new Cuadrado(25);
echo "El área del cuadrado es: " . $cuadrado->area();
echo '<br>';

class Triangulo extends Figura {    
        private $altura;
        private $base;
    
        function __construct( int $altura, int $base) {
            $this->altura = $altura;
            $this->base = $base;
        }

        function get(string $prop): int {
            return $this->{$prop};
        }
    
        function set(string $prop) {
            $this->{$prop} = $value;
        }
    
        function area(): int {
            return ($this->base * $this->altura)/2;
        }
    
    }
    
    $triangulo = new Triangulo(25, 10);
    echo "El área del triangulo es: " . $triangulo->area();
    echo '<br>'
    //$triangulo->set('base', 50);
    //echo $triangulo->get('base');