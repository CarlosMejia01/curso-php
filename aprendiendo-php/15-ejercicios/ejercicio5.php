<?php

/**
 * Crear un array con el contenido de la tabla:
 * 
 * ACCION AVENTURA    DEPORTES
 * GTA    ASSASINS     Fifa19
 * COD    CRASH        Pes 19
 * PUGB   PRINCE of    Moto GP
 *        Persia
 * 
 * Cada columna debe ir en un fichero separado
 */

$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA" => array("Assains Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("Fifa 19", "Pes 19", "Moto G 19")
);

$categorias = array_keys($tabla);

?>


<table class="default" border="1">

    <?php require_once './includes/encabezado.php' ?>
    <?php require_once './includes/primera.php' ?>
    <?php require_once './includes/segunda.php' ?>
    <?php require_once './includes/tercera.php' ?>


</table>