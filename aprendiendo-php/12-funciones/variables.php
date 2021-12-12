<?php


/**
 * Variables locales: Son las que se definen dentro de una función y no pueden ser usadas fuera de la función, solo estan disponibles a no ser que se haga un return
 * 
 * Variables globales: Son las que se desclaran fuera de una función y estan disponibles dentro y fuera de las funciones
 */
//Var global
 $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

 echo $frase;

 function holaMundo() {
     global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";


    return $year;

 };

 //echo holaMundo();

 //Funciones variables

 function buenosDias() {
     return "Hola! Buenos días";
 };

 function buenasTardes() {
    return "Hola! Buenas tardes";
 };

 function buenasNoches() {
    return "Hola! Buenas noches";
 };


 $horario = $_GET['horario'];
 echo "<br>";
 $miFuncion = "buenas".$horario;
 echo $miFuncion();

?>