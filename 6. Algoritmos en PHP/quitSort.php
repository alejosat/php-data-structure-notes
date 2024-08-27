<?php
function quickSort($array) {
    if (count($array) < 2) {
        return $array;
    }

    $pivote = $array[0];
    $menores = array_filter(array_slice($array, 1), fn($x) => $x <= $pivote);
    $mayores = array_filter(array_slice($array, 1), fn($x) => $x > $pivote);

    return array_merge(quickSort($menores), [$pivote], quickSort($mayores));
}

$numeros = [5, 3, 8, 4, 2];
$ordenados = quickSort($numeros);
print_r($ordenados); // [2, 3, 4, 5, 8]
?>
