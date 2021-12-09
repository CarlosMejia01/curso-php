<?php

//Operadores aritmeticos

$numero1 = 55;
$numero2 = 33;


echo 'Suma: '.($numero1 + $numero2).'<br>';
echo 'Resta: '.($numero1 - $numero2).'<br>';
echo 'Multiplicación: '.($numero1 * $numero2).'<br>';
echo 'División: '.($numero1 / $numero2).'<br>';
echo 'Resto: '.($numero1 % $numero2).'<br>';

//Operadores de incremento y decremento

$year = 2019;

//Incremento
$year++;

//Decremento
$year--;

//Pre-incremento
// $year = 1 + $year;
++$year;

//Pre-drecemento
// $year = 1 - $year;
--$year;

echo '<h1>'.$year.'</h1>';

?>