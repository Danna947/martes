<?php
$horas= readline('Ingrese la hora: ');
$min =readline('Ingrese los minutos: ');
    $resultado = match (true) {
        $horas >= 0 && $horas <= 6 => "Es de madrugada",
        $horas >= 6 && $horas <= 12 => "Es por la mañana",
        $horas >= 12 && $horas <= 18 => "Es por la tarde",
        $horas >= 18 && $horas <= 23 => "Es por la noche",
        default => "Hora desconocida"
    };
echo $resultado;
?>





