<?php
$num = intval (readline("Ingresa un número :"));
$mul=1;
for ($i=1; $i<=$num; $i++) { 
    $mul = $mul* $i;
    
}
echo $mul;

?>