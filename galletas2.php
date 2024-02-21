<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar y Bucles en PHP con Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Tabla de Multiplicar del Número 6</h2>
                <!-- Tabla de Multiplicar del Número 6 -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Valor</th>
                            <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $numero = 6;
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<tr>";
                            echo "<td>$numero x $i</td>";
                            echo "<td>" . ($numero * $i) . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col">
                <h2>Bucle FOR decreciente de 50 a 40</h2>
                <!-- Bucle FOR de 50 a 40 -->
                <ul class="list-group">
                    <?php
                    for ($galletas = 50; $galletas >= 40; $galletas--) {
                        echo "<li class='list-group-item'>$galletas</li>";
                    }
                    ?>
                </ul>
            </div>


            <div class="col">
                <h2>Bucle FOR que muestra el doble del valor de $contador</h2>
                <!-- Bucle FOR que muestra el doble del valor de la variable contador -->
                <ul class="list-group">
                    <?php
                    for ($contador = 1; $contador <= 5; $contador++) {
                        echo "<li class='list-group-item'>" . ($contador * 2) . "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
