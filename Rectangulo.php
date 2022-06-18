<?php
class Rectangulo
{

    //Definimos las propiedades del rectángulo:
    protected $base; 
    protected $altura;


    public function __construct($b, $a)
    {
        $this->base = $b;
        $this->altura = $a;
    }


    public function calcularPerimetro()
    {
        $perimetro = $this->base * 2 + $this->altura * 2;
        return $perimetro;
    }

    public function calcularArea()
    {
        return $this->base * $this->altura;
    }

    public function esCuadrado()
    {
        return $this->base === $this->altura;
    }
}