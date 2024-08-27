<?php
$method = $_SERVER['REQUEST_METHOD'];
$dsn = 'mysql:host=localhost;dbname=mi_base_de_datos';
$usuario = 'root';
$password = '';

try {
    $conexion = new PDO($dsn, $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    switch($method) {
        case 'GET':
            $sql = "SELECT * FROM usuarios";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($usuarios);
            break;

        case 'POST':
            $data = json_decode(file_get_contents('php://input'), true);
            $sql = "INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)";
            $stmt = $conexion->prepare($sql);
            $stmt->execute(['nombre' => $data['nombre'], 'email' => $data['email']]);
            echo json_encode(['mensaje' => 'Usuario creado']);
            break;

        case 'PUT':
            $data = json_decode(file_get_contents('php://input'), true);
            $sql = "UPDATE usuarios SET nombre = :nombre, email = :email WHERE id = :id";
            $stmt = $conexion->prepare($sql);
            $stmt->execute(['nombre' => $data['nombre'], 'email' => $data['email'], 'id' => $data['id']]);
            echo json_encode(['mensaje' => 'Usuario actualizado']);
            break;

        case 'DELETE':
            $id = $_GET['id'];
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stmt = $conexion->prepare($sql);
            $stmt->execute(['id' => $id]);
            echo json_encode(['mensaje' => 'Usuario eliminado']);
            break;

        default:
            echo json_encode(['mensaje' => 'Método no soportado']);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
