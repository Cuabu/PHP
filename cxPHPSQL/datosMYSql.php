<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Base de Datos CITAS</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "citas_t");

    /* Comprueba la conexión */
    if ($conn->connect_errno) {
        echo "Fallo de conexión a MySQL!";
        exit();
    } else {
        echo "Conectado a la Base de Datos<br>";
    }

    /* Cierra la conexión */
    mysqli_close($conn);
    ?>
</body>
</html>
