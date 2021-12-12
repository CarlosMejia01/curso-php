<?php

/**
 * ARRAYS
 * 
 * Un array es una colección o conjunto de datos/valores, bajo un unico nombre
 * 
 * Se accede a los valores mediante un indice numerico
 * 
 */

$pelicula = "Batman";

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

//Array asociativos
$personas = array(
    'nombre' => 'Charly',
    'apellidos' => 'One',
    'web' => 'webejemplo.com'
);

var_dump($_GET);
echo "<br>";
var_dump($personas);

//Recorrer con for
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
for($i = 0; $i < count($peliculas); $i++) {
    echo "<li>".$peliculas[$i]."</li>";
};

echo "</ul>";


echo "<h1>Listado de cantantes</h1>";

echo "<ul>";
//Recorrer con foreach
foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}
echo "</ul>";


?>