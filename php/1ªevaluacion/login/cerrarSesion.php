<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CerrarSesion</title>
</head>

<body>
    <?php
    require "header.php";
    if (isset($_SESSION['idUsuario'])) {
        session_destroy();
        header("Location: login.php");  
    }else{
        header("Location: login.php");
    }
    ?>
</body>

</html>