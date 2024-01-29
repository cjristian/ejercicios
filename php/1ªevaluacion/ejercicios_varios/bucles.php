<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "-----------------EJERCICIO 1-----------------";
    echo "<br>";
    echo "<br>";

    $numero = 21;
    if ($numero % 7 == 0) {

        echo 'Es multiplo de 7';
    } else {
        echo 'No es multiplo';

    }


    echo "<br>";
    echo "<br>";

    echo "-----------------EJERCICIO 2-----------------";
    echo "<br>";
    echo "<br>";
    for ($i = 0; $i < 11; $i++) {
        echo $i;
    }
    echo "<br>";
    echo "<br>";


    echo "-----------------EJERCICIO 3-----------------";
    echo "<br>";
    echo "<br>";
    $edad = 7;
    if ($edad < 18) {
        echo 'Es menor de edad';

    } else {
        echo 'Es maor de edad';

    }
    echo "<br>";
    echo "<br>";
    echo "-----------------EJERCICIO 4-----------------";
    echo "<br>";
    echo "<br>";

    $i = 10;
    while ($i >= 0) {
        echo $i, "<br>";
        $i--;
        # code...
    }

    echo "<br>";
    echo "<br>";
    echo "-----------------EJERCICIO 5-----------------";
    echo "<br>";
    echo "<br>";


    $variable = 5;
    switch ($variable) {
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miercoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
        case 6:
            echo 'Sabado';
            break;
        case 7:
            echo 'Domingo';
            break;

        default:
            # code...
            break;
    }
    echo "<br>";
    echo "<br>";
    echo "-----------------EJERCICIO 6-----------------";
    echo "<br>";
    echo "<br>";

    $contador = 0;
    for ($i = 0; $i < 101; $i++) {
        $contador += $i;
    }
    echo $contador;

    echo "<br>";
    echo "<br>";
    echo "-----------------EJERCICIO 7-----------------";
    echo "<br>";
    echo "<br>";

    $temperatura = 20;
    if ($temperatura > 10 && $temperatura < 30) {
        echo 'Temperatura agradable';
        # code...
    } elseif ($temperatura < 10) {
        echo 'Frio';
    } elseif ($temperatura > 30) {
        echo 'Calor';

    }


    echo "<br>";
    echo "<br>";
    echo "-----------------EJERCICIO 8-----------------";
    echo "<br>";
    echo "<br>";
    $j = 0;
    while ($j < 21) {
        if ($j % 2 == 0) {

            echo $j, "<br>";
        }
        $j++;

    }



    ?>


</body>

</html>