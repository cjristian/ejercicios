<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        COMPROBACION DE ERRORES DE TU FORMULARIO
    </h1>

    <section>
        <?php
        include("libros.php");
        foreach ($libros as $key => $value) {
            if ($_POST['isbn']==intval($key['ISBN'])) {
                ++$count;
                echo'Total de libros: '.$count;
                echo "<p>- ISBN:".$key['ISBN']."</p>";
                echo "<p>- Titulo:".$key['nombre']."</p>";
                echo "<p>- Author:".$key['Autor']."</p>";
                
            }
        }
        ?>

    </section>

</body>

</html>