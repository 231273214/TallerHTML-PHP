<?php

abstract class Figura {
    abstract public function calcularArea();
}

class Triangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }
}

class Circulo extends Figura {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

class Cuadrado extends Figura {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->lado, 2);
    }
}

class Rectangulo extends Figura {
    private $ancho;
    private $largo;

    public function __construct($ancho, $largo) {
        $this->ancho = $ancho;
        $this->largo = $largo;
    }

    public function calcularArea() {
        return $this->ancho * $this->largo;
    }
}
?>
