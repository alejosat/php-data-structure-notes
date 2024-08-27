<?php
$sql = "INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)";
$stmt = $conexion->prepare($sql);
$stmt->execute(['nombre' => 'Alejandro', 'email' => 'alejandro@example.com']);
?>
