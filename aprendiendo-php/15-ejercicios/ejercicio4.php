<?php

/**
 * Ejercicio 4. Crear un script en php que tenga 4 variables, una variable
 * de tipo array, otra de tipo string, otra booleana y que imprima un mensaje
 * segun el tipo de variable que sea.
 */

 $array = ['hola','como', 'estas'];
 $string = "esto es un string";
 $boolean = true;

 if(gettype($array) === 'array') {

    echo "La variable $array es array";

 } 
 
 if($string === 'string') {

    echo "La variable $string es string";


 } 
 
 if ($boolean === true) {
    echo "La variable $string es boolean";
 }
