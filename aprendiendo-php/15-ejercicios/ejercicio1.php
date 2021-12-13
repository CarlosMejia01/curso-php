<?php

/**
 * Ejercicio 1. Hacer un programa en php que tenga un array con 8 numeros enteros
 * y que haga lo siguiente:
 * -Recorrerlo y mostrarlo
 * -Ordernalo y mostrarlo
 * -Mostrar su longitud
 * Buscar algun elemento
 */


 $numeros = [3,6,2,1,5,7,4,8];

 //Recorrer y mostrar números

 for($i = 0; $i < count($numeros); $i++) {
    echo "Número ".$numeros[$i]."<br>";
 };

 //Ordernalo y mostrarlo
 echo "<br>";
 echo "Ordenado";
 echo "<br>";

 sort($numeros);
 for($i = 0; $i < count($numeros); $i++) {
    echo "Número ".$numeros[$i]."<br>";
 };

 echo "<br>";
 echo "Longitud array números es: ".count($numeros);

 echo "<br>";
 echo "Buscar número 7, posición: ".array_search(7, $numeros);

?>