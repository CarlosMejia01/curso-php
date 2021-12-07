<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Imprimir por pantalla</title>
</head>

<body>
    <h1>Curso PHP</h1>


    <?="Prueba curso de PHP"?>

    <?php
    // Titular de la sección
    echo "<h3>Listado de videojuegos:<h3>";

    /*
    Lista
    de
    videojuegos modernos
    */

    echo "<ul>"
        . "<li>GTA</li>"
        . "<li>Fifa</li>"
        . "<li>Mario Bros</li>"
        . "</ul>";

    //echo '<br>HOLA HOLA HOLA </br>';


    // Parrafo explicativo
    echo '<p>Esta es toda'.' - '.'lista de juegos</p>';
    ?>

</body>

</html>