<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora de Llantas</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
  }
  .container {
    max-width: 600px;
    margin: 0 auto;
  }
  h2 {
    color: #333;
  }
  .resultado {
    background-color: #f9f9f9;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
  }
  hr {
    border: 0;
    border-top: 1px solid #ccc;
    margin: 20px 0;
  }
</style>
</head>
<body>
<div class="container">
  <div class="resultado">
    <?php
      $precioBase = 800;
      $precioDescuento = 700;

      $cantidadLlantasMas5 = 7;
      $descuentoPorcentajeMas5 = 100 - ($precioDescuento / $precioBase) * 100;
      $totalPagarMas5 = $cantidadLlantasMas5 * $precioDescuento;

      echo "<h2>Caso de compra de más de 5 llantas:</h2>";
      echo "<p>Precio original por llanta: $precioBase dólares</p>";
      echo "<p>Precio con descuento por llanta (comprando más de 5): $precioDescuento dólares</p>";
      echo "<p>Total a pagar por $cantidadLlantasMas5 llantas: $totalPagarMas5 dólares</p>";
      echo "<p>Descuento aplicado: $descuentoPorcentajeMas5 %</p>";
    ?>
  </div>
  <hr>
  <div class="resultado">
    <?php
      $cantidadLlantasMenos5 = 4;
      $descuentoPorcentajeMenos5 = 0;
      $totalPagarMenos5 = $cantidadLlantasMenos5 * $precioBase;

      echo "<h2>Caso de compra de menos de 5 llantas:</h2>";
      echo "<p>Precio original por llanta: $precioBase dólares</p>";
      echo "<p>Precio con descuento por llanta (comprando menos de 5): $precioBase dólares</p>";
      echo "<p>Total a pagar por $cantidadLlantasMenos5 llantas: $totalPagarMenos5 dólares</p>";
      echo "<p>Descuento aplicado: $descuentoPorcentajeMenos5 %</p>";
    ?>
  </div>
</div>
</body>
</html>
