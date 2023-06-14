<?php
//pedir al usuario una lista de numeros
$a = readline("Ingrese cuantas notas va ingresar\n");
$notas =[];
$sum=0;
for ($i=1; $i<=$a ; $i++) { 
    $notas[$i-1]= floatval (readline("Ingrese la nota $i :\n"));
    $sum += $notas[$i-1];
}
$promedio = $sum/$a;
echo("EL promedio de las notas es igual: $promedio\n");

?>