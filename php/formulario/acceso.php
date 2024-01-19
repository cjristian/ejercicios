<?php


if (($_GET['usuario'] == 'raquel') && ($_GET['password'] == '1234')) {
    echo '<br>';
    echo '<br>';
    echo 'Hola '. $_GET['usuario'];
} else {
    require "inicio.php";

}
?>