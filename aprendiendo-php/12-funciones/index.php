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

    $cadena_texto = "";

    if($negrita) {
       $cadena_texto .= "<h1>";
    };

    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicación: $multi <br/>";
    $cadena_texto .= "division: $division <br/>";
    
    if($negrita) {
        $cadena_texto .= "</h1>";
    };
    
    
    $cadena_texto .= "<hr>";
    var_dump($cadena_texto);

    return $cadena_texto;
};

echo calculadora(10, 20, true);

//Ejemplo 4

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
};

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
};

function devuelveElNombre($nombre, $apellidos) {
    $texto = getNombre($nombre)
             ."<br/>".
             getApellidos($apellidos);
    return $texto;
};

echo devuelveElNombre("Charly", "One");
// echo getNombre("texxttt");




?>