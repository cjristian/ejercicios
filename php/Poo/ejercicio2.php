<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    //Inicializar variables y contadores
    class Persona
    {

        public $nombre;
        public $edad;
         const MAYORIA_EDAD = 18;
        function __construct($nombre, $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function mostrarDatos()
        {
            $mensaje = ($this::MAYORIA_EDAD > $this->edad) ? "No tiene la mayoria de edad" : "Tiene la mayoria de edad";

            echo "El nombre es :" . $this->nombre . " con una edad de " . $this->edad." ." . $mensaje;
        }
    }


    $persona1 = new Persona("Cristian", 41);
    $persona2 = new Persona("Sara", 3);

    $persona1->mostrarDatos();
    echo"</br>";
    $persona2->mostrarDatos();


    ?>
</body>

</html>