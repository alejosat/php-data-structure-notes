<?php
function manejadorErrores($errno, $errstr, $errfile, $errline) {
    echo "Error: [$errno] $errstr - $errfile:$errline<br>";
    // Se puede usar die() para detener la ejecución en caso de un error crítico
}

set_error_handler("manejadorErrores");

echo $undefinedVar; // Genera un E_NOTICE
?>
