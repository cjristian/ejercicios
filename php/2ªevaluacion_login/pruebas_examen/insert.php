<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'usuario', 'contrasena', 'mi_base_datos');

// Verificar la conexión
if ($conn->connect_errno) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Comprobación del método HTTP
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $nombre = trim(htmlspecialchars($_GET['nombre']));
    $edad = trim(htmlspecialchars($_GET['edad']));
    $ciudad = trim(htmlspecialchars($_GET['ciudad']));

    // Query para insertar un nuevo usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre, edad, ciudad) VALUES (?, ?, ?)";
    
    // Preparar la sentencia
    $stmt = $conn->prepare($query);
    
    // Vincular parámetros
    $stmt->bind_param("sis", $nombre, $edad, $ciudad);

    // Ejecutar la sentencia preparada
    $stmt->execute();

    // Verificar si la consulta fue exitosa
    if ($stmt->affected_rows > 0) {
        echo "Usuario agregado correctamente.";
    } else {
        echo "Error al agregar usuario: " . $conn->error;
    }

    // Cerrar la sentencia preparada
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
