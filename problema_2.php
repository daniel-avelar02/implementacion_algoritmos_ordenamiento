<?php
function mergeSort(array $array): array {
    if (count($array) <= 1) {
        return $array; // Caso base
    }

    $medio = intdiv(count($array), 2);
    $izquierda = mergeSort(array_slice($array, 0, $medio));
    $derecha = mergeSort(array_slice($array, $medio));

    return merge($izquierda, $derecha);
}

function merge(array $izquierda, array $derecha): array {
    $resultado = [];
    while (count($izquierda) > 0 && count($derecha) > 0) {
        if ($izquierda[0] < $derecha[0]) {
            $resultado[] = array_shift($izquierda);
        } else {
            $resultado[] = array_shift($derecha);
        }
    }
    return array_merge($resultado, $izquierda, $derecha);
}

// Lista de prueba
$listaPalabras = ["mango", "pera", "manzana", "kiwi", "platano"];
echo "Lista original: " . implode(", ", $listaPalabras) . PHP_EOL;
$listaOrdenada = mergeSort($listaPalabras);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $listaOrdenada) . PHP_EOL;
?>
