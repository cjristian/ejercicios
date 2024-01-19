<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercici8</title>
</head>

<body>
    <?php
    //Inicializar variables y contadores
    require_once "ejercicio7.php";
    class Coche extends Vehiculo
    {
        public $puertas;
        public $color;
        function __construct($marca, $anioFabricacion,$puertas,$color)
        {
            $this->marca= $marca;
            $this->anioFabricacion= $anioFabricacion;
            $this->puertas=$puertas;
            $this->color=$color;

        }
          function mostrarInfo(){
            echo $this->anioFabricacion." ".$this->marca." ".$this->puertas." ".$this->color;

        }
    }
    class Moto extends Vehiculo{
        private $cilindrada;
        private $tipoMoto;
        function __construct($marca, $anioFabricacion,$cilindrada,$tipoMoto)
        {
            $this->marca= $marca;
            $this->anioFabricacion= $anioFabricacion;
            $this->cilindrada=$cilindrada;
            $this->tipoMoto=$tipoMoto;

        }
        function mostrarInfo(){
            echo $this->anioFabricacion." ".$this->marca." ".$this->cilindrada." ".$this->tipoMoto;

        }

    }
    $coche1= new Coche("seat",2002,3,"marron");
    $coche2= new Coche("audi",2020,3,"gris");
    $coche1->mostrarInfo();
    echo "<br>";
    $coche2->mostrarInfo();
    echo "<br>";

    $moto1= new Moto("Ducati",2005,1199,"rojo");
    $moto2= new Moto("Tamayi",2009,750,"azul");
    $moto1->mostrarInfo();
    echo "<br>";
    $moto2->mostrarInfo();

    ?>
</body>

</html>