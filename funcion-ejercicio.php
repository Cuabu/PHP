<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP con Bootstrap</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <?php
                // a) Función que muestra la suma de cinco números
                function sumarCincoNumeros($num1, $num2, $num3, $num4, $num5) {
                    echo "La suma de los cinco números es: " . ($num1 + $num2 + $num3 + $num4 + $num5);
                }

                // Llamada a la función con cinco números específicos
                sumarCincoNumeros(5, 10, 15, 20, 25);
                ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <?php
                // b) Función que devuelve la suma de cinco números
                function sumarCincoNumeros2($num1, $num2, $num3, $num4, $num5) {
                    return $num1 + $num2 + $num3 + $num4 + $num5;
                }

                // Asignar el resultado de la función a una variable y mostrarla
                $tmp = sumarCincoNumeros2(2, 5, 8, 10, 15);
                echo "El resultado de la suma de cinco números es: $tmp";
                ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <?php
                // c) Función para calcular el volumen de un cilindro
                function calcularVolumenCilindro($radio, $altura) {
                    $numeroPI = 3.1416;
                    return $numeroPI * $radio * $radio * $altura;
                }

                // Llamada a la función para calcular el volumen de un cilindro con valores específicos
                $radio = 5;
                $altura = 10;
                $volumen_cilindro = calcularVolumenCilindro($radio, $altura);
                echo "El volumen del cilindro con radio $radio y altura $altura es: $volumen_cilindro";
                ?>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
