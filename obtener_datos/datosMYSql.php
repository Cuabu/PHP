<?php
$conexion = mysqli_connect("localhost", "root", "", "citas_t");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MedIdentificacion = $_POST["Identificación"];
    $sql = "SELECT MEDIdentificacion, MEDNombres, MEDApellidos FROM medicos WHERE MEDIdentificacion = '$MedIdentificacion'";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<td>Identificación</td>";
        echo "<td>Nombres</td>";
        echo "<td>Apellidos</td>";
        echo "</tr>";

        while ($mostrar = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $mostrar['MEDIdentificacion'] . "</td>";
            echo "<td>" . $mostrar['MEDNombres'] . "</td>";
            echo "<td>" . $mostrar['MEDApellidos'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron datos para la identificación proporcionada.";
    }
}
?>
