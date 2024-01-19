<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercici4</title>
</head>

<body>
    <?php
    //Inicializar variables y contadores
    class Matematicas
    {
        static $num1;
        static $num2;
        function __construct($num1, $num2)
        {
            self::$num1 = $num1;
            self::$num2 = $num2;
            

        }

        static function suma()
        {
            return self::$num1 + self::$num2;
        }
        static function multiplicar()
        {
            return self::$num1 + self::$num2;
        }
    }

    ?>
</body>

</html>