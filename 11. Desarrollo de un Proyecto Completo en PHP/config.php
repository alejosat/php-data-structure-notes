<?php
$dsn = 'mysql:host=localhost;dbname=mi_proyecto';
$usuario = 'root';
$password = '';

try {
    $conexion = new PDO($dsn, $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>
