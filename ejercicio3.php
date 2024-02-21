<?php
// Funcion para calcular el salario semanal de un obrero
function calcularSalarioSemanal($horas_trabajadas) {
    $salario_base = 20; // Salario base por hora
    $horas_normales = min($horas_trabajadas, 40); // Obtener las primeras 40 horas o menos
    $horas_extra = max($horas_trabajadas - 40, 0); // Obtener las horas extras (si las hay)

    // Calcular el salario para las horas normales
    $salario_normales = $horas_normales * $salario_base;

    // Calcular el salario para las horas extras
    $salario_extra = $horas_extra * 25; // $25 por hora extra

    // Calcular el salario total sumando el salario de las horas normales y extras
    $salario_total = $salario_normales + $salario_extra;

    return $salario_total;
}

// Ejemplo: horas trabajadas por un obrero
$horas_obrero = 40; // Inicialmente trabajo 40 horas

// Inicializar una variable de conteo para el numero de veces que el obrero trabaja horas extras
$num_horas_extra = 0;

do {
    // Incrementar el numero de horas trabajadas
    $horas_obrero += 1;

    // Calcular el salario semanal del obrero con las horas actuales
    $salario_obrero = calcularSalarioSemanal($horas_obrero);

    // Verificar si el obrero esta trabajando horas extras y mostrar el salario
    if ($horas_obrero > 40) {
        $num_horas_extra++;
        echo "El salario semanal del obrero con $horas_obrero horas trabajadas (incluyendo $num_horas_extra horas extras) es: $" . $salario_obrero . "<br>";
    }
} while ($num_horas_extra < 40); // el obrero tenga 40 horas extras

echo "El obrero ha alcanzado el límite de 40 horas extras.";
?>
