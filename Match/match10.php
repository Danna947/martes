<?php
$numero=readline("Ingrese un número del 1 al 5 ");

$resultado = match($numero){
    '1' => "Se realiza la opcion 1",
    '2' => "Se realiza la opcion 2",
    '3' => "Se realiza la opcion 3",
    '4' => "Se realiza la opcion 4",
    '5' => "Se realiza la opcion 5",

    default => "ese número no esta en la lista"
    

};
echo $resultado;


?>