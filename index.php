<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Básica en PHP</title>
</head>
<body>
    <h1>Bienvenido a Mi Página Web</h1>
    <p>Este es un ejemplo básico de una página web usando PHP.</p>
    <p>La fecha y hora actual es: 
        <?php
            echo date("Y-m-d H:i:s");
        ?>
    </p>
</body>
</html>
