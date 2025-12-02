<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libro de Visitas</title>
</head>
<body>
    <h2>Deja tu comentario</h2>

    <form action="procesar.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Comentario:</label><br>
        <textarea name="comentario" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
