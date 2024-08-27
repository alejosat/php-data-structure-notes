<?php
function busquedaLineal($array, $valor) {
    foreach ($array as $indice => $elemento) {
        if ($elemento === $valor) {
            return $indice;
        }
    }
    return -1; // No encontrado
}

$numeros = [1, 2, 3, 4, 5];
echo busquedaLineal($numeros, 3); // 2
?>
