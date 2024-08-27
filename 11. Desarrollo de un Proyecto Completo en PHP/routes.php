<?php
require 'controllers/UserController.php';
require 'controllers/PostController.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/usuarios' && $method === 'GET') {
    UserController::index();
} elseif ($uri === '/usuarios' && $method === 'POST') {
    UserController::store();
} elseif ($uri === '/publicaciones' && $method === 'GET') {
    PostController::index();
} elseif ($uri === '/publicaciones' && $method === 'POST') {
    PostController::store();
} else {
    http_response_code(404);
    echo "Página no encontrada";
}
?>
