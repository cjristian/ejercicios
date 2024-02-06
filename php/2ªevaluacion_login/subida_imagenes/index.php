<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de subida de ficheros</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen" />
        <input type="submit" value="Enviar" />
    </form>
    <?php
    echo "<hr/>";
    echo "El array de ficheros subidos:<br/>";
    var_dump($_FILES);
    echo "<hr/>";
    const DIR_IMAGES = "dirimg";

    if (isset($_FILES['imagen'])) {
        //Nombre original del fichero
        $file_name = $_FILES['imagen']['name'];
        //Tamaño del fichero
        $file_size = $_FILES['imagen']['size'];
        //Nombre temporal del fichero (se guarda en una carpeta tmp del servidor)
        $file_tmp = $_FILES['imagen']['tmp_name'];
        //Tipo del fichero
        $file_type = $_FILES['imagen']['type'];

        //Comprobación de la extensión, en este ejemplo .png, .jpg o .jpeg
        $tmp = explode('.', $file_name);
        $file_ext = end($tmp);//Obtiene  la última posición del array
        $extensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extensión no permitida, por favor introduce una imagen .PNG o .JPG.";
        }

        //Comprobación de tamaño, nos lo pasa en bytes
        if ($file_size > 2097152) {
            $errors[] = 'El tamaño de la imagen es superior a 2 MB';
        }

        //Si no hay errores
        if (empty($errors)) {
            //IMPORTANTE: se debe comprobar si el directorio existe
            if (file_exists(DIR_IMAGES)) {
                move_uploaded_file($file_tmp, "dirimg/" . $file_name);
                echo "Subida correcta<br/>";
                echo "<img src='dirimg/$file_name' width='300'/>";
            } else {
                $errors[] = "El directorio '" . DIR_IMAGES . "' no existe";
            }
        }

        if ($errors) {
            echo implode(". ", $errors);
        }
    }
    ?>
</body>

</html>