<?php
$apiKey = 'TU_CLAVE_API_AQUI';

if ($_GET['api_key'] !== $apiKey) {
    http_response_code(403);
    echo json_encode(['mensaje' => 'Acceso denegado']);
    exit;
}

// Resto del código de la API aquí...
?>
