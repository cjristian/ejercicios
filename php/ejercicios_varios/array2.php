<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo '<h1> EJERCICIO 8</h1>';
    $meses = array("enero", "febrero", "marzo", "abril", "mayo");
    $array1 = array();
    foreach ($meses as $value) {
        for ($i = 0; $i < strlen($value); $i++) {
            if ($value[$i] == 'r') {
                $array1[] = $value;
                break;
            }

        }
    }
    print_r($array1);
    echo '<br>';
    echo '<h1> EJERCICIO 9</h1>';
    $notas = array(8, 7, 6, 9, 5);
    $bandera = $notas[0];
    $bandera1;
    foreach ($notas as $key => $value) {
        if ($value < $bandera) {
            $bandera = $value;
            $bandera1 = $key;
        }

    }

    echo 'La posicion del numero mas bajo es de :', $bandera1;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 10</h1>';
    $calificaciones = array("Ahmed" => "A", "María" => "B", "Karol" => "C", "Myrna" => "A", "Luisa" => "A");
    $calificaiones_aprobados = array();
    foreach ($calificaciones as $key => $value) {
        if ($value == 'A') {
            $calificaiones_aprobados[] = $key;
        }
    }
    print_r($calificaiones_aprobados);

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 11</h1>';
    $total = 0;
    $tota2 = 0;
    $nombre;
    $estudiantes = array("Yusuff" => array("matemáticas" => 90, "historia" => 85, "inglés" => 88), "María" => array("matemáticas" => 92, "historia" => 78, "inglés" => 95), "Carlos" => array("matemáticas" => 88, "historia" => 90, "inglés" => 92));
    foreach ($estudiantes as $clave => $value) {
        foreach ($value as $asignatura => $nota) {
            $total += $nota;
        }
        $total = $total / 3;
        if ($total > $tota2) {
            $tota2 = $total;
            $nombre = $clave;
        }
        $total = 0;
    }
    echo 'La nota mas alta es de ', $nombre, ' : ', $tota2;

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 12</h1>';
    $salario_max = 0;
    $empleado_salario_max;
    $empleados = array("Juan" => array("salario" => 2500, "departamento" => "Ventas"), "María" => array("salario" => 3000, "departamento" => "Marketing"), "Karol" => array("salario" => 2800, "departamento" => "Ventas"));
    foreach ($empleados as $nombre => $empleado) {
        if ($empleado["salario"] > $salario_max) {
            $salario_max = $empleado['salario'];
            $empleado_salario_max = $nombre;
        }

    }

    echo 'El salario mayor es de : ' . $salario_max . ' con nombre ' . $empleado_salario_max;


    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 13</h1>';
    $contador_frutas = 0;
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva");
    foreach ($frutas as $key) {
        if ($key == 'manzana') {
            $contador_frutas++;
        }

    }

    echo 'Hay ' . $contador_frutas . ' manzanas';

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 14</h1>';
    $notas = array(8, 7, 6, 9, 5);
    sort($notas); //ascendente;
    print_r($notas);
    echo '<br>';
    arsort($notas); //descendente;
    print_r($notas);

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 15</h1>';
    $media_nota = 1000;
    $nombre_alumno;
    $total;
    $estudiantes = array("Yusuff" => array("matemáticas" => 90, "historia" => 85, "inglés" => 88), "María" => array("matemáticas" => 92, "historia" => 78, "inglés" => 95), "Carlos" => array("matemáticas" => 88, "historia" => 90, "inglés" => 92));
    foreach ($estudiantes as $clave => $value) {
        foreach ($value as $nombre => $asignaturas) {
            $total += $asignaturas;
        }
        $total = $total / 3;
        if ($total < $media_nota) {
            $media_nota = $total;
            $nombre_alumno = $clave;
        }

    }



    echo 'La nota media mas baja es de : ' . $media_nota . ' nombre : ' . $nombre_alumno;

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 16</h1>';
    $total_productos = 0;
    $compras = array("producto1" => array("precio" => 20, "cantidad" => 2), "producto2" => array("precio" => 15, "cantidad" => 5), "producto3" => array("precio" => 10, "cantidad" => 3));
    foreach ($compras as $producto => $value) {
        echo $producto, ' tiene una cantidad de'.($producto['precio'] * $producto['cantidad']);
        echo '<br>';
        $total_productos += ($producto['precio'] * $producto['cantidad']);

    }
    echo 'El total de los productos es de ' . $total_productos;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 17</h1>';
    $salario_alto = 0;
    $nombre_salarioalto;
    $departamento_ventas = 0;
    $departamento_marketing = 0;
    $contador1 = 0;
    $contador = 0;

    $empleados = array("Juan" => array("salario" => 2500, "departamento" => "Ventas"), "María" => array("salario" => 3000, "departamento" => "Marketing"), "Karol" => array("salario" => 2800, "departamento" => "Ventas"), "Sarah" => array("salario" => 2000, "departamento" => "Marketing"));
    foreach ($empleados as $nombre => $array) {

        foreach ($array as $opciones) {
            if ($array['salario'] > $salario_alto) {
                $salario_alto = $array['salario'];
                $nombre_salarioalto = $nombre;

            }
            switch ($array['departamento']) {
                case "Ventas":
                    $departamento_ventas += $array['salario'];
                    $contador1++;
                    break;
                case "Marketing":
                    $departamento_marketing += $array['salario'];
                    $contador++;
                    break;


                default:

                    break;
            }
        }
    }
    echo 'El salario mas alto es de ' . $nombre_salarioalto . ' con un sueldo de : ' . $salario_alto;
    echo '<br>';
    echo 'El departamento de marketing tiene: ' . $departamento_marketing /= $contador;
    echo '<br>';
    echo 'El departamento de ventas tiene: ' . $departamento_ventas /= $contador1;

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 18</h1>';
    $personas = array("Yusuff", "María", "Karol", "Ana", "Linda");
    $contador_minimo = strlen($personas[0]);
    $contador_maximo = 0;
    $longitudnombre = 0;
    $nombre_minimo;
    $nombre_maximo;
    foreach ($personas as $clave => $value) {
        $longitudnombre = strlen($value);
        if ($longitudnombre > $contador_maximo) {
            $contador_maximo = $longitudnombre;
            $nombre_maximo = $value;
        } elseif ($longitudnombre < $contador_minimo) {
            $contador_minimo = $longitudnombre;
            $nombre_minimo = $value;
        }

    }

    echo '<br>';
    echo 'El nombre mas largo es de  ' . $nombre_maximo . ' con ' . $contador_maximo . ' letras';
    echo '<br>';
    echo 'El nombre mas corto es de  ' . $nombre_minimo . ' con ' . $contador_minimo . ' letras';


    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 19</h1>';
    $frutas_contadas = array(

        'manzana' => 0,
        'banana' => 0,
        'naranja' => 0,
        'uva' => 0
    );
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva");
    foreach ($frutas as $key => $value) {
        switch ($value) {
            case 'manzana':
                ++$frutas_contadas['manzana'];
                break;
            case 'banana':
                ++$frutas_contadas['banana'];
                break;
            case 'naranja':
                ++$frutas_contadas['naranja'];
                break;
            case 'uva':
                ++$frutas_contadas['uva'];

                break;

            default:

                break;
        }


    }
    print_r($frutas_contadas);

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 20</h1>';
    $nombres = array("Leo", "María", "Karol", "Álvaro", "Lin");
    arsort($nombres);
    $nuevo_array = $nombres;
    print_r($nuevo_array);

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 21</h1>';
    $libros = array("Libro1", "Libro2", "Libro3");
    array_unshift($libros, "Libro4");
    print_r($libros);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 22</h1>';
    $ventas = array("producto1" => array("precio" => "10", "ventas" => "4"), "producto2" => array("precio" => "20", "ventas" => "3"), "producto3" => array("precio" => "50", "ventas" => "1"));
    $productos = 1;
    $productos_array = array();
    $total_productos = 0;
    foreach ($ventas as $producto => $value) {
        foreach ($value as $opcion => $numero) {
            $productos *= $numero;
        }
        $productos_array[] = $productos;
        $productos = 1;

    }
    foreach ($productos_array as $key) {
        $total_productos += $key;
    }
    echo 'El total de todos los precios es de ' . $total_productos;

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1> EJERCICIO 23</h1>';
    $array_nombres_largo = array();
    $longitud = 0;
    $nombres = array("Alexander", "María", "Simo", "Ana", "Lin");
    foreach ($nombres as $clave) {
        $longitud = strlen($clave);

        if ($longitud > 5) {

            $array_nombres_largo[] = $clave;
        }
    }
    print_r($array_nombres_largo);
    ?>
</body>

</html>