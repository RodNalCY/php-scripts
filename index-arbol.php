<?php
header('Content-type: application/json; charset=utf-8');
// for ($i = 0; $i <= 10; $i++) {
//     if ($i == 0) {
//         echo "*";
//     }else{
//         echo "*\n";
//     }
//     for ($j = 0; $j < $i; $j++) {
//         echo "*";
//     }
// }

$altura = 19;

for ($i = $altura ; $i >= 1; $i--) {
    // Imprimir espacios
    for ($j = $altura; $j > $i; $j--) {
        echo " ";
    }
    // Imprimir asteriscos
    for ($k = 0; $k < (2 * $i) - 1; $k++) {
        echo "+";
    }
    // Nueva línea después de cada fila
    echo "\n";
}

for ($i = 1; $i <= $altura; $i++) {
    // Imprimir espacios
    for ($j = $i; $j < $altura; $j++) {
        echo " ";
    }
    // Imprimir asteriscos
    for ($k = 0; $k < (2 * $i - 1); $k++) {
        echo "*";
    }
    // Nueva línea después de cada fila
    echo "\n";
}
?>