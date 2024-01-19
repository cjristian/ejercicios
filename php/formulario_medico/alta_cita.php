<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-weight: bold;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>FORMULARIO DEL PACIENTE</h1>
    <p>*NOMBRE DEL USUARIO:
        <?php
        printf("%'*20s", $_POST['usuario']);
        ?>
    </p>
    <p>*NUMERO DE SEGURIDAD SOCIAL:
        <?php
        printf("%'020s", $_POST['tarjeta']);
        ?>
    </p>
    <p>*FECHA DE NACIMIENTO:
        <?php
        echo $_POST['f_nacimiento'];
        ?>
    </p>
    <p>*FECHA DE CITA:
        <?php
        echo $_POST['f_cita'];
        ?>
    </p>
    <p>*ESPECIALISTAS:
        <?php
        printf("%'--20s",  $_POST['especialistas']);
        ?>
    </p>

</body>

</html>

<?php






?>