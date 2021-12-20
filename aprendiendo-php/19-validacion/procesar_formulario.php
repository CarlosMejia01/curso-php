<?php
$error = "faltan_valores";
if (empty($_POST['nombre']) && empty($_POST['apellidos'])
    && empty($_POST['edad']) && empty($_POST['email'])
    && empty($_POST['pass'])) {
    $error = "ok";
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
} else {
    $error = "faltan_valores";
    header("Location:index.php?error=$error");
}

?>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

</body>
<footer>

</footer>

</html>