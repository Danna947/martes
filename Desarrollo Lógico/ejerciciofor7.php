<?php
$lista = readline("Ingresa la lista de elementos separados por comas: ");
$listaArray = explode(",", $lista);
$elementoBuscado = readline("Ingresa el elemento que deseas buscar: ");
$posicion = -1;
for ($i = 0; $i < count($listaArray); $i++) {
    if ($elementoBuscado == $listaArray[$i]) {
        $posicion += $i + 1;
    }
   
}
echo "El elemento $elementoBuscado se encuentra en la posición $posicion.";
?>

