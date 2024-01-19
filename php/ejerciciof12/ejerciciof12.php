<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $animales = array(
        "perro" => array(
            "raza" => "Labrador",
            "edad" => 3,
            "color" => "dorado"
        ),
        "gato" => array(
            "raza" => "Siames",
            "edad" => 2,
            "color" => "blanco"
        ),
        "pajaro" => array(
            "raza" => "Canario",
            "edad" => 1,
            "color" => "amarillo"
        )
    );
if (file_exists(__DIR__."/ficheros")) {
    
    $mifichero=fopen(__DIR__."/ficheros/animales.txt","a");
    foreach ($animales as $key => $value) {
        // fwrite($mifichero, "tipo_animal". $value["edad"].$value["color"].$value["raza"]);
        foreach ($value as $k => $v) {
            fwrite($mifichero,"tipo_animal".$value["edad"].$value["color"].$value["raza"]);
        }

    }
    fclose($mifichero);
}else{
    mkdir(__DIR__."/ficheros");
    echo"<p style='color:red'>Se procede a su creacion</p>";
    $mifichero=fopen(__DIR__."/ficheros/animales.txt","a");
}

    ?>
</body>

</html>