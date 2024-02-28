<?php

$coche = array(32, 11, 45, 22, 78, -3, 9, 66, 5);

// Muestra el elemento con localizador 5
echo $coche[5]; // Deberá mostrar -3


$importe = array(32.583, 11.239, 45.781, 22.237);

// Muestra el elemento con localizador 1
echo $importe[1]; 


$confirmado = array(true, true, false, true, false, false);

// Muestra el elemento con localizador 0
echo $confirmado[0]; // Deberá mostrar "true"


$jugador = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");

// Concatenación de los elementos del array
$alineacion = "La alineación del equipo está compuesta por ";
$alineacion .= implode(", ", $jugador) . ".";

echo $alineacion; // Deberá mostrar: La alineación del equipo está compuesta por Crovic, Antic, Malic, Zulic, Rostrich.

?>
