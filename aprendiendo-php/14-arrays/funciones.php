<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];

$numeros = [1,2,5,7,3,9];

//Ordenar
sort($numeros);
var_dump($numeros);

//Añadir elementos a un array
echo "<br>";
array_push($cantantes, 'Waor');

//Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]); 
var_dump($cantantes);

//Aleatorio
echo "<br>";
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Invertir un array
echo "<br>";
var_dump(array_reverse($numeros));

//Buscar dentro de un arreglo
echo "<br>";
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

//Contar numero de elementos
echo "<br>";
echo sizeof($cantantes);

?>