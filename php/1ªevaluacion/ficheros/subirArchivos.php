<!DOCTYPE html>
<html lang="es">

<head>
    <title>Selector de Archivos</title>
</head>

<body>

    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <input type="color" name="color"><br />
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" name="archivo" id="archivo" accept=".txt"><br />
        <br>
        <input type="submit" value="Subir">
    </form>
    <?php
   
    if (!empty($_FILES["archivo"])) {
        $myfile = $_FILES["archivo"]["tmp_name"];
        $myfile = fopen($myfile, "r");
        while (!feof($myfile)) {
            if (is_string(fgets($myfile))) {
                ?>
                <p style="color: <?php $_POST["color"] ?>;">
                    <?php fgets($myfile); ?>
                </p>
                <?php
            } else {
                ?>
                <p style="color:red"> No es de tipo texto </p>
                <?php
            }

        }
        fclose($myfile);
    } else {
        ?>
        <p>No existe el archivo</p>
        <?php
    }
    ?>
</body>

</html>