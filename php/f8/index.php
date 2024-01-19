<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['texto']);

        $mifichero = fopen(dirname(__FILE__) . "/files/archivos.txt", "w");
        fwrite($mifichero, $nombre);

        fclose($mifichero);
    }
    ?>

    <h1>FORMULARIO DE CAMBIO DE TEXTO</h1>


    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

        <textarea name="texto" id="texto" cols="30" rows="10">
                        <?php if (file_exists(dirname(__FILE__) . "/files/archivos.txt")) {
                            $mifichero = fopen(dirname(__FILE__) . "/files/archivos.txt", "r");
                            
                            while (!feof($mifichero)) {
                                $linea = fgets($mifichero);
                                echo $linea;

                            }
                            fclose($mifichero);
                        } else {
                            $mifichero = fopen(dirname(__FILE__) . "/files/archivos.txt", "a");
                        }
                        ?>
                </textarea>

        <button stype="submit" name="boton">Cambiar</button>
    </form>


</body>

</html>