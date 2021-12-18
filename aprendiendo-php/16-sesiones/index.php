<?php


/**
 * Sesión: Almacenar y persistir datos del usuario mientras navega en el sitio hasta que cierre
 * sesion o cierra el navegador.
 */

 //Iniciar la sesión
 session_start();

 //Variable local
 $variable_normal = "Soy una cadena de texto";

 //Variable de sesión
 $_SESSION['variable_persistente'] = "HOLA SOY UNA SESIÓN ACTIVA";


 echo $variable_normal."<br/>";
 echo $_SESSION['variable_persistente']."<br/>";

?>