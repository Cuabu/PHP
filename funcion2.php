<?php   //      Ejemplo     Funciones
function operaciones($n1, $n2, $operacion){
    $resultado = 0;
    if($operacion == "sumar"){
        $resultado = n1 + n2;
    }else if ($operacion == "restar"){
            $resultado = n1 - n2;
    }else if ($operacion == "multiplicar" ){
        $resultado = n1 * n2;
    }
    return $resultado; 
}
$r = operaciones(5, 7, "sumar";
echo $r . "<br>";

echo operaciones(15,8, "resta");
?>
