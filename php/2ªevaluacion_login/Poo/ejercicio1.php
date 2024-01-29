<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>

<body>
    <?php
    //Inicializar variables y contadores
    class Persona
    {

        public $nombre;
        public $edad;
        function __construct($nombre, $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function mostrarDatos()
        {

            echo "El nombre es :" . $this->nombre . " con una edad de " . $this->edad;
        }
    }

    $persona1 = new Persona("Cristian",21);

    $persona1 -> mostrarDatos();


    ?>
</body>

</html>