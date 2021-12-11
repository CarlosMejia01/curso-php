<?php

/**
 * Ejercicio 6: Mostrar una tabla de html con las tablas de multiplicar del 1 al 10
 */
for($num1=1;$num1<=10;$num1++){
    echo "Tabla de multiplicar del numero $num1";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Numero1</td>";
    echo "<td>Numero2</td>";
    echo "<td>Multiplicacion</td>";
    echo "</tr>";
    for($num2=1;$num2<=10;$num2++) {
        echo "<tr>";
        echo "<td>$num1</td>";
        echo "<td>$num2</td>";
        echo "<td>".($num1*$num2)."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}


?>