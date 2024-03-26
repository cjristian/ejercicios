<?php
require_once("BaseDatos.php");
if (isset($_GET['id'])) {
    $id = htmlspecialchars(trim($_GET['id']));
    $pelicula = new BaseDatos();
    $pelicula->getUser($id);
}
