<?php

function evaluarNota($nota): string{
    if ($nota > 0 && $nota < 5){
        $resultado="Suspenso";
    } else if ($nota >= 5 && $nota <= 6){
        $resultado="Aprobado";
    } else {
        $resultado="Sobresaliente";
    }
    return $resultado;
}

$alumnos = [
    "Carlos" => 8.9,
    "Paco" => 2.0,
    "Messi" => 10,
    "Cristiano" => 7.7,
    "Miriam" => 6.9
];

$promedioNotas = 0;

foreach ($alumnos as $key => $value) {
    echo "Alumno: " . $key . ", Nota: " . $value . '<br>';
    $promedioNotas += $value;
}

echo '<br>';

echo "Promedio de notas: " . $promedioNotas/count($alumnos) . '<br>';
echo '<br>';

foreach ($alumnos as $key => $value) {
    echo "Alumno: " . $key . ", Nota: " . evaluarNota($value) . '<br>';
    $promedioNotas += $value;
}



