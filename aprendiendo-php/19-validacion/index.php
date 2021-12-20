<!DOCTYPE html>
<html lang="es">
    <meta charset="utf-8">
    <title>Validación de formularios PHP</title>
    <body>
        <h1>Validar formularios en php</h1>
        <?php
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                if($error == "faltan_valores") {
                    echo "<strong style='color: red;'>Introduce todos los datos en todos los campos
                    del formulario</strong>";
                }
                if($error == "nombre") {
                    echo "<strong style='color: red;'>Introduce bien el nombre</strong>";
                }
                if($error == "apellidos") {
                    echo "<strong style='color: red;'>Los apellidos no son correctos
                    del formulario</strong>";
                }
                if($error == "edad") {
                    echo "<strong style='color: red;'>Introduce una edad correcta
                    del formulario</strong>";
                }
                if($error == "email") {
                    echo "<strong style='color: red;'>El correo es erroneo
                    del formulario</strong>";
                }
                if($error == "pass") {
                    echo "<strong style='color: red;'>Introduce una contraseña de más de 5 letras
                    del formulario</strong>";
                }
            }
        ?>
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