<?php

//Constantes
//Es un contenedor de información que no puede variar

define('nombre', 'Prueba Web');
define('web', 'pruebaweb.com');

//var

$web = "nuevaweb.com";


echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

$web = "nuevawebtwo.com";

echo '<h1>'.$web.'</h1>';

//Constantes predefinidas
echo __FUNCTION__;
echo '<br>';
echo PHP_OS;
echo '<br>';
echo __FILE__;



?>
