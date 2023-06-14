<?php
$opcion=readline("Ingrese un numero del 1 al 7:");
$semana = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
if($opcion==1){
    echo"Hoy es ".$semana[0];
} 
else if($opcion==2){
    echo"Hoy es ".$semana[1];
}
elseif ($opcion==3) {
    echo"Hoy es ".$semana[2];
}
elseif ($opcion==4) {
    echo"Hoy es ".$semana[3];
}
elseif ($opcion==5) {
    echo"Hoy es ".$semana[4];
}
elseif ($opcion==6) {
    echo"Hoy es ".$semana[5];
}
elseif ($opcion==7) {
    echo"Hoy es ".$semana[6];
}
else{
    echo "Número inválido";
}

?>