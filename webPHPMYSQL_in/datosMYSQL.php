<?php
// Establecer conexión con la base de datos
$conexion = mysqli_connect("localhost", "root", "", "citas_t");

// Verificar si se ha enviado el formulario mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $identificacion = $_POST["Identificación"];
    $nombres = $_POST["Nombres"];
    $apellidos = $_POST["Apellidos"];

    // Verificar si el registro ya existe
    $consulta_existencia = "SELECT * FROM medicos WHERE MedIdentificacion = '$identificacion'";
    $resultado = mysqli_query($conexion, $consulta_existencia);
    if (mysqli_num_rows($resultado) > 0) {
        echo "Error: El registro ya existe en la base de datos.";
    } else {
        // Preparar la consulta SQL para insertar los datos en la tabla medicos
        $sql = "INSERT INTO medicos (MedIdentificacion, MedNombres, MedApellidos) VALUES ('$identificacion', '$nombres', '$apellidos')";

        // Ejecutar la consulta
        if (mysqli_query($conexion, $sql)) {
            echo "Registro exitoso. Datos insertados: Identificación: $identificacion, Nombres: $nombres, Apellidos: $apellidos";
        } else {
            echo "Error al ingresar los datos en la base de datos: " . mysqli_error($conexion);
        }
    }

    // Cerrar la conexión con la base de datos
    mysqli_close($conexion);
}
?>
