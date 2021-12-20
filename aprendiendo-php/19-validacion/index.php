<!DOCTYPE html>
<html lang="es">
    <meta charset="utf-8">
    <title>Validación de formularios PHP</title>
    <body>
        <h1>Validar formularios en php</h1>
        <form action="procesar_formulario.php" method="POST">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" required pattern="[A-Za-z]+"><br>
            <label for="apellidos">Apellidos</label><br>
            <input type="text" name="apellidos" required pattern="[A-Za-z]+"><br>
            <label for="edad">Edad</label><br>
            <input type="number" name="edad" required pattern="[0-9]+"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" required><br>

            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass" required><br>

            <input type="submit" value="Emviar">
            

        </form>
    </body>
    <footer></footer>
</html>