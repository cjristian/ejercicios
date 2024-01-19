<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Circulo
    {
        const PI = pi();

        public $radio;

        function __construct($radio)
        {
            $this->radio=$radio;

        }
        function areaCirculo(){

            return $this::PI * pow($this->radio,2);
        }
    }
    ?>
</body>

</html>