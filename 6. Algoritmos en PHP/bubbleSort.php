<?php
function bubbleSort(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

$numeros = [5, 3, 8, 4, 2];
bubbleSort($numeros);
print_r($numeros); // [2, 3, 4, 5, 8]
?>
