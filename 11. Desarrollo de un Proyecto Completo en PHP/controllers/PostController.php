<?php
require 'models/Post.php';

class PostController {
    public static function index() {
        $publicaciones = Post::all();
        echo json_encode($publicaciones);
    }

    public static function store() {
        $data = json_decode(file_get_contents('php://input'), true);
        Post::create($data);
        echo json_encode(['mensaje' => 'Publicación creada']);
    }
}
?>
