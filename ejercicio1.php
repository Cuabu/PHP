<?php

// Asignamos el valor 3 a la variable $a
$a = 3;

// Asignamos el valor 3 a la variable $b
$b = 3;

// Comparamos si $a es igual a $b
$resultado1 = $a == $b;

// Asignamos el valor de $b a $a
$a = $b;

// Asignamos el valor 4 a la variable $b
$b = 4;

// Comparamos de nuevo si $a es igual a $b
$resultado2 = $a == $b;

// Imprimimos los resultados
echo "Valor de \$a después de asignar \$b: " . $a . "<br>";
echo "Valor de \$b después de cambiar su valor: " . $b . "<br>";

// Imprimimos los resultados de las comparaciones
echo "¿\$a es igual a \$b antes de la asignación? " . ($resultado1 ? 'Sí' : 'No') . "<br>";
echo "¿\$a es igual a \$b después de la asignación? " . ($resultado2 ? 'Sí' : 'No') . "<br>";

?>

