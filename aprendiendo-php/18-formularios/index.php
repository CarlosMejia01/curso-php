<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre"></p>
        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido" placeholder="Ingresa tu apellido"></p>
        <label for="boton">Botón: </label>
        <p><input type="button" name="boton" value="Click"></p>
        <label for="sexo">Sexo: </label>
        <p>
            Hombre<input type="checkbox" name="sexo" value="hombre" checked>
            Mujer<input type="checkbox" name="sexo" value="mujer">
        </p>
        <label for="color">Color: </label>
        <p><input type="color" name="color"></p>
        <label for="fecha">Fecha: </label>
        <p><input type="date" name="fecha"></p>
        <label for="correo">Email: </label>
        <p><input type="email" name="correo"></p>
        <label for="archivo">Archivo: </label>
        <p><input type="file" name="archivo" multiple></p>
        <label for="numero">Numero: </label>
        <p><input type="number" name="numero"></p>
        <label for="pass">Contraseña: </label>
        <p><input type="password" name="pass"></p>
        <label for="continente">Continente: </label>
        <p>
            America del Sur<input type="radio" name="continente" value="America del Sur">
            Europa<input type="radio" name="continente" value="Europa">
            Asia<input type="radio" name="continente" value="Asia">
        </p>
        <label for="web">Pagina web: </label>
        <p><input type="url" name="web"></p>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>