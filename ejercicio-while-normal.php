<?php
$contador = 50;

echo "<h2>Bucle decreciente:</h2>";
while ($contador >= 40) {
    echo "$contador ";
    $contador--;
}
?>

<?php
$contador = 1;

echo "<h2>Doble del valor de \$contador:</h2>";
while ($contador <= 5) {
    $doble = $contador * 2;
    echo "$doble ";
    $contador++;
}
?>
