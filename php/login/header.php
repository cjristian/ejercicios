<?php
session_start();  
if (!isset($_SESSION['idUsuario'])) {

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="imagen">
            <img src="img/logo.png" alt="logo">
        </div>
        <nav>
            <a href="mensajesEnviados.php">Mensajes enviados</a>
            <a href="mensajesRecibidos.php">Mensajes recibidos</a>
            <a href="cerrarSesion.php">Cerrar sesion</a>
        </nav>
        <div class="container">
            <div class="containerboton">

                <button>
                    <img src="img/b_mensaje.png" alt="">
                </button>
            </div>
            <div class="texto">
                <p> <?= $_SESSION['nusuario'] . " " . $_SESSION['pusuario'] ?></br><span class=" texto--dif"><?= ($_SESSION['tusuario'] == 1) ? "Profesor" : "Estudiante"; ?></span></p>
            </div>
            <div class="containerimg">

                <img src="img/monsalisa.jpeg" alt="fotoPerfil">
            </div>
        </div>

    </header>
    <h1>Bienvenido <?= $_SESSION['nusuario'] . " " . $_SESSION['pusuario'] ?></h1>
</body>

</html>