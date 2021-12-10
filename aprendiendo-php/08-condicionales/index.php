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

$color = "verde";

if($color == "rojo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo "<br>";
$year = 2019;
if($year != 2019) {
    echo "Es un año diferente al 2019";
} else {
    echo "Estamos 2019";
};


?>