<?php
require_once 'Rectangulo.php';

class Cuadrado extends Rectangulo
{
    public function __construct($l)
    {
        parent::__construct($l, $l);
    }
}