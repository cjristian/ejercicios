<?php

trait CalculoVacaciones {
    public function calcularVacaciones() {
        return "Calculando vacaciones...";
    }
}

trait SettersGettersMagicos {
    public function __get($propiedad) {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        } else {
            return "Propiedad no encontrada: " . $propiedad;
        }
    }

    public function __set($propiedad, $valor) {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        } else {
            echo "No se puede establecer la propiedad. Propiedad no encontrada: " . $propiedad;
        }
    }
}

class Empleado {
    use CalculoVacaciones, SettersGettersMagicos;

    private $nombre;
    private $apellido;
    private $edad;
    private $salario;
}

// Uso en el programa principal
$empleado = new Empleado();
$empleado->__set("nombre", "Juan");
$empleado->__set("apellido", "Pérez");
$empleado->__set("edad", 30);
$empleado->__set("salario", 50000);

echo "Empleado: " . $empleado->__get("nombre") . " " . $empleado->__get("apellido") . "<br>";
echo "Edad: " . $empleado->__get("edad") . "<br>";
echo "Vacaciones: " . $empleado->calcularVacaciones() . "<br>";

?>
