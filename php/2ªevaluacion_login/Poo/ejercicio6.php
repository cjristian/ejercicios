<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercici6</title>
</head>

<body>
    <?php
    //Inicializar variables y contadores
    class Estudiante
    {
        public $nombre;
        public $edad;
        public $materias = ["Matematicas", "Lengua", "Biologia", "Fisica"];

        function __construct($nombre, $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;

        }

        function mostrarMaterias()
        {
            foreach ($this->materias as $key) {
                echo $key;
                echo "<br/>";
            }
        }
    }
    ?>
</body>

</html>