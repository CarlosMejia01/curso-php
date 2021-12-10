<?php
/*
Bucle While
Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces 
como sea necesario, en base en una condición

while (condicion) {
    bloque de instrucciones
    otra instruccion
}

*/

$num = 0;
while($num <= 100) {
    echo $num;
    if ($num != 100) {
        echo ", ";
    }

    $num++;
};


?>