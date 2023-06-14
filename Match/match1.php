<?php
$a= readline ("Ingrese un nÚmero entre 1 y 3: ");


$resultado= match($a){
    '1' => "Este es 1",
    '2' => "Este es 2",
    '3' => "Este es 3",
    default =>"no es"
}; 
 echo $resultado;

?>