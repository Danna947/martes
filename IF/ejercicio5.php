<?php
$num1=readline("Ingrese un Número:");
$num2=readline("Ingrese un Número:");
if($num1>10 && $num2>10){
    echo"Ambos números son mayores que 10";
}
else if($num1>10 && $num2<10 or $num1<10 && $num2>10){
    echo"Solo un número es mayor que 10";
}
else{
    echo "Ninguno de los números es mayor que 10";
};

?>
