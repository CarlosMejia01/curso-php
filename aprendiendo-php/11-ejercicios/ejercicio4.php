<?php

/**
 * Ejercicio 4: Recoger dos números por la url (Parametros GET) y hacer todas las operaciones basicas de una calculadora
 * (Suma, resta, multiplicación y división)
 */


 if(isset($_GET['num1']) && isset($_GET['num2'])) {
     $num1 = $_GET['num1'];
     $num2 = $_GET['num2'];
     echo "<h3>Calculadora</h3>";
    echo "Suma de $num1 y $num2 es: ".($num1+$num2)."<br>";
    echo "Resta de $num1 y $num2 es: ".($num1-$num2)."<br>";
    echo "Multiplicación de $num1 y $num2 es: ".($num1*$num2)."<br>";
    echo "División de $num1 y $num2 es: ".($num1/$num2)."<br>";
 } else {
     echo "Envia num1 y num2 por la URL";
 }


?>