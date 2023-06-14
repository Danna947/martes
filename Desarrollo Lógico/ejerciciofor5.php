 <?php
$numero = readline("Ingresa un número: ");
$esPrimo = true;
if ($numero > 1) {
    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}else{
    $esPrimo = false;
}
if ($esPrimo) {
    echo "$numero Es un número primo";
} else {
    echo "$numero No es un número primo";
}
?>
