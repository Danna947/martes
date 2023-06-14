
<?php

$string= readline("Ingrese la cadena de texto:");

if(is_numeric($string)){
    echo"Esto no es una cadena ";
}else{
    echo "Esto es texto.";
};
 
$resultado= match(true){
    strlen($string) >= 10 =>"La cadena es larga",
    default => "La cadena es corta"
};

echo $resultado;
?>