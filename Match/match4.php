<?php
$fecha=readline("Ingrese una fecha DD-MM-AA:");

$resultado= match($fecha){
    '6-01-2023' => 'El dia de reyes',
    '14-02-2023'=> 'el dia de san valentin',
    '8-03-2023' => 'El dia de la mujer',
    '8-04-2023'=> 'El dia internacional del pueblo gitano',
    '8-05-2023' => 'El dia de la madre',
    '1-06-2023'=> 'El dia internacional del niño',
    '22-07-2023' => 'El dia de mi cumpleaños',
    '7-08-2023'=> 'El dia de mi cumple',
    '17-09-2023' => 'El dia del amor y amistad',
    '12-10-2023'=> 'El dia de la raza',
    '22-11-2023' => 'El dia del musico',
    '28-12-2023' => 'El dia de los inocentes',
    default => 'El mes que ingreso no esta en la lista'
};

echo $resultado;





?>