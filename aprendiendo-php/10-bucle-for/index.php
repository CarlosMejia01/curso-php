<?php
/*
//For
for(expresion contador, condicion, actualizando contador ) {
    //Bloque
}
*/

/*
$resultado = 0;

for($i = 0; $i <= 100; $i++) {
    $resultado += $i;
    echo "<p>$resultado</p>";
} 


echo "<h1> el resultado es: $resultado</h1>";

*/

if(isset($_GET['numero'])) {
    //cambiar tipo de dato
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

for($contador = 1;$contador <= 10;$contador++) { 
    if($numero == 45) {
        echo "No se puede mostrar esta operación";
        break;
    }
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}


?>