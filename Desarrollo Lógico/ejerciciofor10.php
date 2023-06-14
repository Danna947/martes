<?php

$txt = readline("Ingresa una lista de números separados por coma:");
$numeros = explode(",", $txt);
$numeros = array_map('intval', $numeros);
$longitud = count($numeros);

for ($i = 0; $i < $longitud - 1; $i++) {
    for ($d = 0; $d < $longitud - $i - 1; $d++) {
        if ($numeros[$d] > $numeros[$d + 1]) {
            $pas = $numeros[$d];
            $numeros[$d] = $numeros[$d + 1];
            $numeros[$d+ 1] = $pas;
        }
    }
}
foreach ($numeros as $numero) {
    echo $numero . " ";
}

?>



