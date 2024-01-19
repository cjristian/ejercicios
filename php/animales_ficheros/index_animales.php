<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
</head>

<body>
    <?php
    $animales = array(
        "perro" => array(
            "tipo" => "mamífero",
            "patas" => 4,
            "sonido" => "ladrido"
        ),
        "gato" => array(
            "tipo" => "mamífero",
            "patas" => 4,
            "sonido" => "maullido"
        ),
        "pájaro" => array(
            "tipo" => "ave",
            "patas" => 2,
            "sonido" => "canto"
        ),
        "serpiente" => array(
            "tipo" => "reptil",
            "patas" => 0,
            "sonido" => "siseo"
        )
    );

    // Ejercicio f1
    // if (file_exists("animales.txt")) {
    //     $abrir = fopen("animales.txt", "a");
    //     foreach ($animales as $key => $value) {
    //         fwrite($abrir, ucfirst($key) . ":");
    //         foreach ($value as $opciones => $resultado) {
    //             fwrite($abrir, $opciones . "," . $resultado . ",");
    //         }
    //         fwrite($abrir, "\n");
    //     }
    //     fclose($abrir);
    // } else {
    //     $crear = fopen("animales.txt", "w");
    // }
    
    //Ejercicof2
    // $file = "animales.txt";
    // foreach ($animales as $key => $value) {
    //     $anadirLineas = ucfirst($key) . ":";
    //     foreach ($value as $opciones => $resultado) {
    //         $anadirLineas .= $opciones . "," . $resultado . ",";
    //     }
    //     $anadirLineas .= PHP_EOL;
    //     file_put_contents($file, $anadirLineas, FILE_APPEND);
    // }
    

    //EJRCICIO f3
    
    // if (file_exists("animales.csv")) {
    

    //     $abrir = fopen("animales.csv", "a");
    //     foreach ($animales as $key => $value) {
    //         fwrite($abrir, sprintf("%s;", strtoupper($key)));
    //         foreach ($value as $opciones => $resultado) {
    //             fwrite($abrir, sprintf("%s;", strtoupper($resultado)));
    //         }
    //         fwrite($abrir, "\n");
    //     }
    //     fclose($abrir);
    // } else {
    //     $crear = fopen("animales.csv", "a");
    // }
//Ejercicio F4
    
    // if (file_exists("animales.csv")) {
    

    //     $abrir = fopen("animales.csv", "a");
    //     foreach ($animales as $key => $value) {
    //         foreach ($value as $opciones => $resultado) {
    //             fputcsv($abrir, $opciones);

    //         }
            
    //     }
    //     fclose($abrir);
    // } else {
    //     $crear = fopen("animales.csv", "w");
    // }



    //Ejercicio F5

    
    ?>


</body>

</html>