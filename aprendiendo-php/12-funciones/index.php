<?php


/**
 * Funciones: 
 * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilzarse solamente invocando 
 * la función tantas veces como se requiera.
 * 
 * function nombreDeMiFuncion($params){
 *      ..Codigo
 * }
 * 
 * Invocar función:
 * nombreDeMiFuncion($params);
 * 
 */

//Ejemplo1
/*
function muestraNombres() {
    echo "Carlos Andres <br>";
    echo "Mathew Roberts <br>";
    echo "Peter Parker <br>";
    echo "Jhon Ruiz <br>";
    echo "<hr/>";
};

muestraNombres();
muestraNombres();
muestraNombres();
*/
//Ejemplo 2


function tabla($numero) {
    echo "<h3>Tabla de multiplicar del número $numero </h3>";
    for ($i=0; $i <= 10; $i++) { 
        echo "$numero x $i = ".($numero*$i)."<br>";
    };
};
/*
if(isset($_GET['numero'])) {
    tabla($_GET['numero']);
} else {
    echo "No hay número para sacar la tabla";
}
*/

//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false) {
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    if($negrita) {
        echo "<h1>";
    };

    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicación: $multi <br/>";
    echo "division: $division <br/>";
    
    if($negrita) {
        echo "</h1>";
    };
    
    
    echo "<hr>";
};

calculadora(10, 30);
calculadora(30, 5, true);
calculadora(40, 20);


?>