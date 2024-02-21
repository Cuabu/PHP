<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bucles en PHP con Bootstrap</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Bucle decreciente:</h2>
            <ul class="list-group">
                <?php
                $contador = 50;
                while ($contador >= 40) {
                    echo "<li class='list-group-item'>$contador</li>";
                    $contador--;
                }
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Doble del valor de $contador:</h2>
            <ul class="list-group">
                <?php
                $contador = 1;
                while ($contador <= 5) {
                    $doble = $contador * 2;
                    echo "<li class='list-group-item'>$doble</li>";
                    $contador++;
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
