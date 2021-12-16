<?php

/**
 * Ejercicio 3:Programa que compruebe si una variable esta vacia
 * y si esta vacia, rellenarla con texto en minuscula y mostrarlo en mayuscula y negrita
 */

 $texto = "";
if(empty($texto)) {
    $texto = 'hola';
    echo strtoupper("<b>".$texto."</b>");
}

?>