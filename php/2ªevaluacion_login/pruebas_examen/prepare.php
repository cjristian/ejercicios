<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'usuario', 'contrasena', 'mi_base_datos');

// Verificar la conexión
if ($conn->connect_errno) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// --- Operación de Inserción ---

// Datos del nuevo usuario
$nombreNuevo = "Nuevo Usuario";
$edadNuevo = 25;
$ciudadNuevo = "Ciudad Nueva";

// Query para insertar un nuevo usuario en la base de datos
$queryInsert = "INSERT INTO usuarios (nombre, edad, ciudad) VALUES (?, ?, ?)";

// Preparar la sentencia
$stmtInsert = $conn->prepare($queryInsert);

// Vincular parámetros
$stmtInsert->bind_param("sis", $nombreNuevo, $edadNuevo, $ciudadNuevo);

// Ejecutar la sentencia preparada
if ($stmtInsert->execute()) {
    echo "Usuario agregado correctamente. ID del nuevo usuario: " . $stmtInsert->insert_id . "<br>";
} else {
    echo "Error al agregar usuario: " . $conn->error . "<br>";
}

// Cerrar la sentencia preparada
$stmtInsert->close();

// --- Operación de Actualización ---

// Nuevos datos para actualizar
$nuevoNombre = "Usuario Actualizado";
$nuevaEdad = 30;

// Query para actualizar un usuario en la base de datos
$queryUpdate = "UPDATE usuarios SET nombre = ?, edad = ? WHERE id = ?";

// Preparar la sentencia
$stmtUpdate = $conn->prepare($queryUpdate);

// Vincular parámetros
$stmtUpdate->bind_param("sii", $nuevoNombre, $nuevaEdad, $idUsuarioActualizar);

// ID del usuario a actualizar
$idUsuarioActualizar = 1;

// Ejecutar la sentencia preparada
if ($stmtUpdate->execute()) {
    echo "Usuario actualizado correctamente.<br>";
} else {
    echo "Error al actualizar usuario: " . $conn->error . "<br>";
}

// Cerrar la sentencia preparada
$stmtUpdate->close();

// --- Operación de Eliminación ---

// ID del usuario a eliminar
$idUsuarioEliminar = 2;

// Query para eliminar un usuario en la base de datos
$queryDelete = "DELETE FROM usuarios WHERE id = ?";

// Preparar la sentencia
$stmtDelete = $conn->prepare($queryDelete);

// Vincular parámetros
$stmtDelete->bind_param("i", $idUsuarioEliminar);

// Ejecutar la sentencia preparada
if ($stmtDelete->execute()) {
    echo "Usuario eliminado correctamente.<br>";
} else {
    echo "Error al eliminar usuario: " . $conn->error . "<br>";
}

// Cerrar la sentencia preparada
$stmtDelete->close();

// Cerrar la conexión
$conn->close();
?>
