<?php
$conexion = mysqli_connect("localhost", "root", "", "citas_t");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="LTR">
<head>
    <meta charset="UTF-8">
    <title>Mostrando los datos</title>
</head>
<body>
    <br>
    <table>
        <tr>
            <td>Identificacion</td>
            <td>Nombres</td>
            <td>Apellidos</td>
        </tr>
        <?php
        $sql = "SELECT * FROM medicos";
        $result = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['MedIdentificacion'] . "</td>";
            echo "<td>" . $row['MedNombres'] . "</td>";
            echo "<td>" . $row['MedApellidos'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <table>
        <tr>
            <td>Identificacion</td>
            <td>Nombres</td>
            <td>Apellidos</td>
        </tr>
        <?php
        $sql = "SELECT * FROM medicos";
        $result = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $mostrar['MEDIdentificacion'] . "</td>";
            echo "<td>" . $mostrar['MEDNombres'] . "</td>";
            echo "<td>" . $mostrar['MEDApellidos'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
