<?php
$limite = readline("Escriba el tamaño del fibonacci:");

$numero1 = 0;
$numero2 = 1;
$secuencia = "$numero1 , $numero2";

while (($numero1 + $numero2) <= $limite) {
    $numero3 = $numero1 + $numero2;
    $secuencia.= ",$numero3";
    $numero1 = $numero2;
    $numero2 = $numero3;
}
echo "Teniendo en cuenta el limite hasta $limite la secuencia, es: $secuencia";

?>