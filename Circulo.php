<?php

class Circulo
{
    public $radio;

    public function __construct($r)
    {
        $this->radio = $r;
    }

    public function calcularPerimetro()
    {
        $p = pi() * $this->radio * 2;
        return $p;
    }

    public function calcularArea()
    {
        $a = pi() * $this->radio * $this->radio;
        return $a;
    }
}