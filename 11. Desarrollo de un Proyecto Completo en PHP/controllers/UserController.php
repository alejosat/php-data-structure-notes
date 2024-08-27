<?php
require 'models/User.php';

class UserController {
    public static function index() {
        $usuarios = User::all();
        echo json_encode($usuarios);
    }

    public static function store() {
        $data = json_decode(file_get_contents('php://input'), true);
        User::create($data);
        echo json_encode(['mensaje' => 'Usuario creado']);
    }
}
?>
