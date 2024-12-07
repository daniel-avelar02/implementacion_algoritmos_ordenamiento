<?php
function insertionSort(array $array): array {
    $n = count($array);
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];
        $j = $i - 1;

        // Mover elementos mayores al lado derecho
        while ($j >= 0 && strcmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}

// Lista de prueba
$listaNombres = ["Carlos", "Ana", "Juan", "Maria", "Luis"];
echo "Lista original: " . implode(", ", $listaNombres) . PHP_EOL;
$listaOrdenada = insertionSort($listaNombres);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $listaOrdenada) . PHP_EOL;
?>
