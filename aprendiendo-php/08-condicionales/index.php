<?php

/*
Condicional IF
If:
    if(condicion) {
        intruccion
    }else {
        otra instruccion
    }


Operadores de comparación

    == "igual"
    === "identico"
    != "distinto o diferente"
    <> "diferente"
    !== "no identico"
    < "menor que"
    > "mayor que"
    <= "menor o igual que"
    >= "mayor o igual que"
*/
//Ejemplo 1
$color = "verde";

if($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo "<br>";

//Ejemplo 2
$year = 2019;
if($year != 2019) {
    echo "Es un año diferente al 2019";
} else {
    echo "Estamos 2019";
};

//Ejemplo 3

$nombre = "Carlos Test";
$ciudad = "Madrid";
$continente = "Asia";
$edad = 19;
$mayoria_edad = 18;

if($edad >= $mayoria_edad) {
    echo "<h1> $nombre es mayor de edad </h1>";
    if($continente == "Europa") {
        echo "<h2> Y es de ciudad $ciudad </h2>";
    } else {
        echo "<h2> No es Europeo </h2>";
    }
} else {
    echo "<h2> $nombre No es mayor de edad </h2>";
};


?>