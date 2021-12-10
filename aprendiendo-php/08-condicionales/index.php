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

/*
    Operadores Logicos
    && And Y
    || Or O
    ! Not No

*/


//Ejemplo 1
$color = "verde";

if ($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo "<br>";

//Ejemplo 2
$year = 2019;
if ($year != 2019) {
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

if ($edad >= $mayoria_edad) {
    echo "<h1> $nombre es mayor de edad </h1>";
    if ($continente == "Europa") {
        echo "<h2> Y es de ciudad $ciudad </h2>";
    } else {
        echo "<h2> No es Europeo </h2>";
    }
} else {
    echo "<h2> $nombre No es mayor de edad </h2>";
};

echo "<br>";
//Ejemplo 4

$dia = 3;
/*
if ($dia == 1) {
    echo "Es Lunes";
} else {
    if ($dia == 2) {
        echo "Es Martes";
    } else {
        if ($dia == 3) {
            echo "Es Miercoles";
        } else {
            if ($dia == 4) {
                echo "Es Jueves";
            } else {
                if ($dia == 5) {
                    echo "Es Viernes";
                } else {
                    echo "Fin de semana";
                }
            }
        }
    }
}
*/

if ($dia == 1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} else {
    echo "Fin de semana";
}

echo "<br>";

//Ejemplo 5

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 17;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "Esta en edad de trabajar";
} else {
    echo "No puede trabajar";
}


echo "<br>";

$pais = "Francia";
if($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla español";
} else {
    echo "No se habla español";
}
