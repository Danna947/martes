<?php
$edad=readline("Ingrese su edad:");
if($edad>=18){
    $respuesta=readline("¿Tiene licencia de conducir:");
    if($respuesta=="si"){
        echo"Puedes conducir!";
    }
    if($respuesta=="no"){
        echo"!Debes obtener una licencia de conducir primero!";
    }
}
if($edad<18){
    echo"No puedes conducir!";
}
?>