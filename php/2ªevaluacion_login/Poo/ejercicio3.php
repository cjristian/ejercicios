<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercici3</title>
</head>

<body>
    <?php
    //Inicializar variables y contadores
    class Libro
    {
        public $titulo;
        public $autor;
        public $anio;
        const IDIOMA ="Español";
        const NUMERO_PAGINAS =40;
        function __construct($titulo, $anio, $autor)
        {
            $this->titulo = $titulo;
            $this->anio = $anio;
            $this->autor = $autor;

        }

        function mostrarDetalles()
        {
            echo  $this->titulo.",".$this->autor.", ".$this->anio.", ".$this::IDIOMA." , ".$this::NUMERO_PAGINAS;
        }
    }
    $libro1 = new Libro("Don Quijote",1212,"Cervantes");
    $libro2 = new Libro("Diario de Ana Frank",1912,"Ana Frank");
    $libro1 ->mostrarDetalles();
    echo"</br>";
    $libro2 ->mostrarDetalles();
    ?>
</body>

</html>