<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$baseDeDatos = 'mi_base_de_datos';

$conexion = new mysqli($host, $usuario, $password, $baseDeDatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo "Conexión exitosa";
?>
