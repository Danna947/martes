<?php
$mes=readline("Ingrese un número de acuerdo al mes :");
$resultado= match($mes){
    '1' => "Enero",
    '2' =>"Febrero",
    '3'=> "Marzo",
    '4'=> "Abril",
    '5'=> "Mayo",
    '6'=> "Junio",
    '7'=>"Julio",
    '8'=>"Agosto",
    '9'=>"Septiembre",
    '10'=>"Octubre",
    '11'=>"Noviembre",
    '12'=>"Diciembre",
    default =>'ese número esta dentro rango'
};
echo $resultado;
?>