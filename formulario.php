<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libro de Visitas</title>
</head>
<body style="background-color: #1c1c1c; color: white; font-family: Arial;">
    <h2>Libro de Visitas</h2>

    <form action="procesar.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Comentario:</label><br>
        <textarea name="comentario" rows="4" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

    <br>
    <button onclick="window.location.href='listado.php'">Ver Libro de Visitas</button>
</body>
</html>
