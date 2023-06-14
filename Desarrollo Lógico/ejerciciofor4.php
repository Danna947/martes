<?php
 $a=readline("Ingresa una palabra:");

  if ($a==strrev($a)) {
     echo"$a es un palindromo";
  }
  else{
    echo"No es un palindromo";
  }
?>