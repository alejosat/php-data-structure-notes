<?php
require 'config.php';

class Post {
    public static function all() {
        global $conexion;
        $stmt = $conexion->query("SELECT * FROM publicaciones");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        global $conexion;
        $stmt = $conexion->prepare("INSERT INTO publicaciones (titulo, contenido) VALUES (:titulo, :contenido)");
        $stmt->execute(['titulo' => $data['titulo'], 'contenido' => $data['contenido']]);
    }
}
?>
