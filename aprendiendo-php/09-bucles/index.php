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

echo "<hr>";
//Ejemplo

if(isset($_GET['numero'])) {
    //cambiar tipo de dato
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

var_dump($numero);


?>