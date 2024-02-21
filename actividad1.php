<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Formulario de Descuento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="producto">Producto:</label>
                <input type="text" class="form-control" name="producto" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" name="precio" required>
            </div>

            <button type="submit" class="btn btn-primary">Calcular Descuento</button>
        </form>

        <?php
        function calcularDescuento($producto, $precio)
        {
            $descuento = 0;

            if ($producto == 'camisa') {
                $descuento = 15;
            } elseif ($producto == 'pantalon') {
                $descuento = 10;
            } elseif ($producto == 'medias') {
                $descuento = 25;
            } elseif ($producto == 'camiseta') {
                $descuento = 30;
            } elseif ($producto == 'ropa_interior') {
                $descuento = 5;
            } else {
                echo '<div class="alert alert-danger mt-3">Producto no válido.</div>';
                return;
            }

            $descuentoAplicado = $precio * ($descuento / 100);
            $precioConDescuento = $precio - $descuentoAplicado;

            echo '<div class="alert alert-success mt-3">';
            echo "Descuento para $producto: $descuento%<br>";
            echo "Precio original: $precio<br>";
            echo "Descuento aplicado: $descuentoAplicado<br>";
            echo "Precio con descuento: $precioConDescuento<br>";
            echo '</div>';
        }

        // Verificamos si se enviaron datos del formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capturamos los datos del formulario
            $producto = $_POST["producto"];
            $precio = $_POST["precio"];

            // Llamamos a la función para calcular el descuento y mostrar el total con descuento
            calcularDescuento($producto, $precio);
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
