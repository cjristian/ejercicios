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
    class Vehiculo
    {
        public $marca;
        public $anioFabricacion;

        function __construct($marca, $anioFabricacion)
        {
            $this->marca= $marca;
            $this->anioFabricacion= $anioFabricacion;

        }

        function mostrarInfo()
        {
            echo $this->anioFabricacion." ".$this->marca;
        }
    }
    ?>
</body>

</html>