<?php
function bubbleSort(array $array): array {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                // Intercambio
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// Lista de prueba
$lista = [3, -1, 4, 2, -6, 5, 3];
echo "Lista original: " . implode(", ", $lista) . PHP_EOL;
$listaOrdenada = bubbleSort($lista);
echo "Lista ordenada (descendente): " . implode(", ", $listaOrdenada) . PHP_EOL;
?>
