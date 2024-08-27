<?php
function busquedaBinaria($array, $valor, $inicio, $fin) {
    if ($inicio > $fin) {
        return -1; // No encontrado
    }

    $medio = floor(($inicio + $fin) / 2);

    if ($array[$medio] === $valor) {
        return $medio;
    } elseif ($array[$medio] > $valor) {
        return busquedaBinaria($array, $valor, $inicio, $medio - 1);
    } else {
        return busquedaBinaria($array, $valor, $medio + 1, $fin);
    }
}

$numeros = [1, 2, 3, 4, 5];
echo busquedaBinaria($numeros, 4, 0, count($numeros) - 1); // 3
?>
