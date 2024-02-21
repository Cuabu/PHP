<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salario Semanal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Calculadora de Salario Semanal</h1>
        <form method="post">
            <div class="form-group">
                <label for="num_obreros">Número de Obreros:</label>
                <input type="number" class="form-control" id="num_obreros" name="num_obreros" min="1" max="1000" required>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num_obreros"])) {
                $num_obreros = $_POST["num_obreros"];

                for ($i = 1; $i <= $num_obreros; $i++) {
                    echo "<div class='form-group'>";
                    echo "<h4>Obrero $i</h4>";
                    echo "<label for='horas_trabajadas_$i'>Horas Trabajadas:</label>";
                    echo "<input type='number' class='form-control' id='horas_trabajadas_$i' name='horas_trabajadas_$i' min='1' required>";
                    
                    echo "<label for='horas_extras_$i'>Horas Extras:</label>";
                    echo "<input type='number' class='form-control' id='horas_extras_$i' name='horas_extras_$i' min='0'>";
                    echo "</div>";
                }

                echo "<button type='submit' class='btn btn-primary'>Calcular Salarios</button>";
            }
            ?>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($num_obreros)) {
            echo "<h2 class='mt-5'>Resultados:</h2>";
            echo "<ul>";
            for ($i = 1; $i <= $num_obreros; $i++) {
                $horas_trabajadas = isset($_POST["horas_trabajadas_$i"]) ? $_POST["horas_trabajadas_$i"] : 0;
                $horas_extras = isset($_POST["horas_extras_$i"]) ? $_POST["horas_extras_$i"] : 0;

                $salario = 0;
                if ($horas_trabajadas <= 40) {
                    $salario = $horas_trabajadas * 20;
                } else {
                    $salario = (40 * 20) + ($horas_extras * 25);
                }

                echo "<li>Obrero $i: Salario semanal $" . $salario . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
