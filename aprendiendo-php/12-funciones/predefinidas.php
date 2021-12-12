<?php
//Debuggear
$nombre = "Charly One";

var_dump($nombre);

//Fechas
echo "<br/>";
echo date('d-m-y');
echo "<br/>";
echo time();


//Matematicas
echo "<br/>";
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<br/>";
echo "Número aleatorio entre 10 y 40: ".rand(10, 40);

echo "<br/>";
echo "Número pi: ".pi();

echo "<br/>";
echo "Redondear: ".round(7.891234, 2);
echo "<hr/>";

//Más funciones generales
echo "<br/>";
echo gettype($nombre);

//Detectar tipado
echo "<br/>";
if(is_string($nombre)) {
    echo "La variable es string";
};

echo "<br/>";
if(!is_float($nombre)) {
    echo "La variable nombre no es un número con decimales";
};

//Comprobar si existe una variable
echo "<br/>";
if(isset($nombre)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

//Limpiar espacios
echo "<br/>";
$frase = "     mi contenido     ";
echo (trim($frase));

//Eliminar variables / indices
$year = 2020;
unset($year);

//Comprobar variable vacia
$texto = "data";
echo "<br>";
if(empty($texto)) {
    echo "La variable esta vacia";
} else {
    echo "La variable tiene contenido";
};

//Contar caracteres de una cadena
echo "<br/>";
$cadena = "12345";
echo strlen($cadena);

//Encontrar caracter
echo "<br/>";
$frase = "La vida es bella";
echo strpos($frase, "i");

//Reemplazar palabras de un string
echo "<br/>";
$frase = str_replace("vida", "moto", $frase);
echo $frase;

//Mayusculas a minusculas
echo "<br>";
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);



?>