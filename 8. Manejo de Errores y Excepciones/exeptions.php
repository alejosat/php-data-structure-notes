<?php
function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new Exception("División por cero no permitida.");
    }
    return $dividendo / $divisor;
}

try {
    echo dividir(10, 0);
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage();
} finally {
    echo "<br>Esto se ejecuta siempre, independientemente de que haya habido una excepción o no.";
}
?>
