<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web Básica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }
        main {
            padding: 1em;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a Mi Página Web</h1>
    </header>
    <main>
        <h2>Introducción</h2>
        <p>Este es un ejemplo básico de una página web usando PHP.</p>
        <?php
            // Código PHP para mostrar la fecha y hora actual
            echo "<p>La fecha y hora actual es: " . date("Y-m-d H:i:s") . "</p>";
        ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mi Página Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

