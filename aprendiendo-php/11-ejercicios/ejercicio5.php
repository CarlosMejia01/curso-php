<?php

/**
 * Ejercicio 5: Hacer un programa que muestre todos los numeros entre dos numeros
 * que nos lleguen por la URL($_GET)
 */

if(isset($_GET['num1']) && isset($_GET['num2'])) {
    
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];

    if($numero1 <= $numero2) {
        for($i = $numero1; $i <= $numero2; $i++) {
            echo "<h4>$i</h4>";
        }
    } else {
        echo "<h4>El número 1 debe ser menor al número 2</h4>";
    }

} else {
    echo "Envian los números por la url";
}

?>