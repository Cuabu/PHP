<?php
echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Bucles en PHP con do-while</title>";
echo "<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-6'>";
echo "<div class='result-container'>";
echo "<h2>Bucle decreciente (do-while):</h2>";
echo "<ul>";

$contador1 = 50;
do {
    echo "<li>$contador1</li>";
    $contador1--;
} while ($contador1 >= 40);

echo "</ul>";
echo "</div>";
echo "</div>";
echo "<div class='col-md-6'>";
echo "<div class='result-container'>";
echo "<h2>Doble del valor de \$contador (do-while):</h2>";
echo "<ul>";

$contador2 = 1;
do {
    $doble = $contador2 * 2;
    echo "<li>$doble</li>";
    $contador2++;
} while ($contador2 <= 5);

echo "</ul>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
