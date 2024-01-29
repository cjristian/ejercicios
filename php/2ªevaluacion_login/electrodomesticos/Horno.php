<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
+

<body>
    <?php
    class Horno
    {
        private const MTEMPERATURA = 350;
        public $temperaturaDeseada;
        public $temperaturaActual;

        function __construct($temp = 25, $temperaturaDeseada)
        {
            $this->temperaturaActual = $temp;
            $this->temperaturaDeseada = $temperaturaDeseada;
        }
        function segundosEjecucion($nGrados)
        {
            switch ($nGrados) {
                case 1:
                case 2:
                    return 2000000;
                case 3:
                case 4:
                    return 4000000;
                case 5:
                case 6:
                    return 8000000;
                case 7:
                case 8:
                    return 10000000;
                case 9:
                case 10:
                    return 12000000;
                default:
                    return 12000000;

            }

        }
        function calentar($numeroGrados = 10)
        {
            usleep(2000000);
            if ($this->temperaturaActual > $this->temperaturaDeseada) {
                echo "No puedes incrementar la temperatura de tu producto";

            } elseif ($this->temperaturaActual < $this->temperaturaDeseada) {
                if ($numeroGrados != 10) {
                    for ($i = $this->temperaturaActual; $i < $this->temperaturaDeseada; $numeroGrados++) {
                        
                    }
                }
            }
        }
    }
    ?>
</body>

</html>