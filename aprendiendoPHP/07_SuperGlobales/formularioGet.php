<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Get</title>
</head>
<body>
    <h1>Formulario por get</h1>
    <form action="recibirGet.php" method="GET">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre"/>

        <label for="apellidoP">Apellido Paterno</label>
        <input type="text" name="apellidoP" placeholder="Apellido Paterno"/>

        <label for="apellidoM">Apellido Materno</label>
        <input type="text" name="apellidoM" placeholder="Apellido Materno"/>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>