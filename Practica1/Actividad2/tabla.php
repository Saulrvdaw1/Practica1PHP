<?php
$num = readline("Introduce un número entero: ");
echo "Tabla del $num" . PHP_EOL;

if ($num < 0) {
    echo "Error: el número es negativo.";
} elseif ($num == 0) {
    echo "La tabla del 0 siempre es 0";
} else {
    for ($i = 1; $i <= 10; $i++) {
        echo $num . " x " . $i . " = " . ($num * $i) . PHP_EOL;
        }
    }
?>