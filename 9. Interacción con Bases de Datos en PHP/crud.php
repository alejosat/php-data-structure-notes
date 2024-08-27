<?php
// Insert

$sql = "INSERT INTO usuarios (nombre, email) VALUES ('Alejandro', 'alejandro@example.com')";
if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// select
$sql = "SELECT id, nombre, email FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Email: " . $fila["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// update
$sql = "UPDATE usuarios SET email='nuevoemail@example.com' WHERE id=1";

if ($conexion->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error actualizando el registro: " . $conexion->error;
}

// delete
$sql = "DELETE FROM usuarios WHERE id=1";

if ($conexion->query($sql) === TRUE) {
    echo "Registro eliminado exitosamente";
} else {
    echo "Error eliminando el registro: " . $conexion->error;
}

?>
