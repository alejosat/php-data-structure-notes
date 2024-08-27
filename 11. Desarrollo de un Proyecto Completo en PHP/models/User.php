<?php
require 'config.php';

class User {
    public static function all() {
        global $conexion;
        $stmt = $conexion->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        global $conexion;
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)");
        $stmt->execute(['nombre' => $data['nombre'], 'email' => $data['email']]);
    }
}
?>
