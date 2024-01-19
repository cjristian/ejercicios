<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

<?php
echo '<br>';
echo '<br>';
echo '<br>';
echo 'EJERCICIO 1

Escribe un script PHP para calcular y mostrar la temperatura promedio, cinco temperaturas más bajas y más altas. 


Temperaturas registradas: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62 , 62, 65, 64, 68, 73, 75, 79, 73
Salida esperada:
La temperatura promedio es: 69.6
Lista de las siete temperaturas más bajas: 60, 62, 63, 63, 64 ';
echo '<br>';
echo '<br>';
$contador = 0;
$sum = 0;

$array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
foreach ($array as $value) {
    $sum += $value;
    $contador++;
}
echo 'La temperatura promedio es de :', $sum / $contador;
sort($array);
$contador = 0;
echo '<br>';
echo '<br>';
echo 'La temperatura ordenadas de manera descendente:';
foreach ($array as $value) {
    echo $value, ',';
    $contador++;
    if ($contador == 7) {
        break;
    }
}

$contador = 0;
arsort($array);
echo '<br>';
echo '<br>';
echo 'La temperatura ordenadas de manera ascendente:';
foreach ($array as $value) {
    echo $value, ',';
    $contador++;
    if ($contador == 7) {
        break;
    }
}

echo '<br>';
echo '<br>';
echo 'EJERCICIO 2
¡$ceu = array( "Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhague", "Finlandia"=>"Helsinki ", "Francia" => "París", "Eslovaquia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlín", "Grecia" => "Atenas", "Irlanda" =>"Dublín", "Países Bajos"=>"Ámsterdam", "Portugal"=>"Lisboa", "España"=>"Madrid", "Suecia"=>"Estocolmo", "Reino Unido"=>"Londres ", "Chipre"=>"Nicosia", "Lituania"=>"Vilna", "República Checa"=>"Praga", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Letonia"=>"Riga", "Malta"=>"Valetta", " Austria" => "Viena", "Polonia"=>"Varsovia") ;

Crea un script PHP que muestre la capital y el nombre del país de la matriz anterior $ceu. Ordena la lista por la capital del país. 

Salida de muestra:
La capital de los Países Bajos es Amsterdam 
La capital de Grecia es Atenas 
La capital de Alemania es Berlín 

';
echo '<br>';
echo '<br>';
$ceu = array("Italia" => "Roma", "Luxemburgo" => "Luxemburgo", "Bélgica" => "Bruselas", "Dinamarca" => "Copenhague", "Finlandia" => "Helsinki ", "Francia" => "París", "Eslovaquia" => "Bratislava", "Eslovenia" => "Ljubljana", "Alemania" => "Berlín", "Grecia" => "Atenas", "Irlanda" => "Dublín", "Países Bajos" => "Amsterdam", "Portugal" => "Lisboa", "España" => "Madrid", "Suecia" => "Estocolmo", "Reino Unido" => "Londres ", "Chipre" => "Nicosia", "Lituania" => "Vilna", "República Checa" => "Praga", "Estonia" => "Tallin", "Hungría" => "Budapest", "Letonia" => "Riga", "Malta" => "Valetta", " Austria" => "Viena", "Polonia" => "Varsovia");
asort($ceu);
foreach ($ceu as $clave => $value) {
    echo 'La capital de ', $clave, ' es ', $value;
    echo '<br>';
}
echo '<br>';
echo '<br>';
echo 'EJERCICIO 3

Escribe un script PHP para ordenar el siguiente array: 
array("Elena"=>"31","Jacob"=>"41","Ana"=>"39","Ramesh"= >"40") en
a) clasificación en orden ascendente por valor
b) clasificación en orden ascendente por clave
c) clasificación en orden descendente por valor
d) clasificación en orden descendente por clave';
echo '<br>';
echo '<br>';



$patata = array("Elena" => "31", "Jacob" => "41", "Ana" => "39", "Ramesh" => "40");
asort($patata);
foreach ($patata as $clave => $value) {
    echo 'Por orden ascendente por valor ', $clave, ' es ', $value;
    echo '<br>';
}
echo '<br>';
echo '<br>';
ksort($patata);
foreach ($patata as $clave => $value) {
    echo 'Por orden ascendente por clave ', $clave, ' es ', $value;
    echo '<br>';
}
echo '<br>';
echo '<br>';
arsort($patata);
foreach ($patata as $clave => $value) {
    echo 'Por orden descendente por clave ', $clave, ' es ', $value;
    echo '<br>';
}

echo '<br>';
echo '<br>';
sort($patata);
foreach ($patata as $clave => $value) {
    echo 'Por orden descendente por valor ', $clave, ' es ', $value;
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo 'EJERCICIO 4';
echo '<br>';
echo 'Crea un archivo PHP que contenga las siguientes funciones y cree un set de prueba para las mismas
';
echo '<br>';
echo '1. Una función que ordena un array numérico y otra que ordena un array de strings';
echo '<br>';
echo '
2. Una función para sumar todos los valores de una matriz.
';
echo '<br>';
echo '

3. Una función para imprimir la siguiente cuadrícula:

4. Una función para calcular el valor promedio de los elementos de matriz.
';
echo '<br>';
echo '

5. Una función para probar si un array contiene un valor específico.
';
echo '<br>';
echo '

6. Una función para encontrar el índice de un elemento de un array. Dado su value que encuentre su índice numérico.

7. Una función para eliminar un elemento específico de un array. Dado su value, que elimine del array el elemento.

8. Una función para copiar una matriz iterando la matriz.

9. Una función para insertar un elemento en una posición específica de un array.

10. Una función para encontrar el valor máximo y mínimo de un array.';
echo '<br>';
echo '<br>';
$b = 0;
$array_num = [2, 5, 6, 1, 8, 34];
$suma = 0;
asort($array_num);
foreach ($array_num as $key => $value) {
    echo $value, ',';
    $suma += $value;
    $b++;
}
echo '<br>';
echo '<br>';
$array_nombr = ["Maria", "Sara", "Sofia", "Carlos", "Adrian", "William", "Carmen"];
asort($array_nombr);
foreach ($array_nombr as $key => $value) {
    echo $value, ',';
}
echo '<br>';
echo '<br>';
echo 'Suma de todos los numeros del primer array: ', $suma;
echo '<br>';
echo '<br>';
$a = 0;
while ($a < 8) {
    for ($i = 0; $i < 12; $i++) {
        echo ' - ';
    }
    echo '<br>';
    $a++;
}
echo '<br>';
echo '<br>';
echo 'El valor promedio del primer array es de :', $suma / $b;
echo '<br>';
echo '<br>';


foreach ($array_nombr as $key => $value) {
    if ($value == 'Sara') {
        echo'Si se encuentra : ', $value;
        break;
    }
}
echo '<br>';
echo '<br>';
$posicion = 0;
foreach ($array_nombr as $key => $value) {
    if ($value == 'Sara') {
        echo $posicion;
    }
    ++$posicion;
}
?>

</html>