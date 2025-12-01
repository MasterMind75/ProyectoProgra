<?php
$conexion = mysqli_connect("sql302.infinityfree.com","if0_40475193","Keyet123","if0_40475193_programacion");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$comentario = mysqli_real_escape_string($conexion, $_POST['comentario']);

$sql = "INSERT INTO libro_visitas (nombre, comentario)
        VALUES ('$nombre', '$comentario')";
mysqli_query($conexion, $sql);

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gracias por participar</title>
</head>
<body style="background-color: #1c1c1c; color: white; font-family: Arial;">
    <h1>¡Gracias por participar!</h1>
    <button onclick="window.location.href='formulario.php'">Agregar otro comentario</button>
    <button onclick="window.location.href='listado.php'">Ver Libro de Visitas</button>
    <button onclick="window.location.href='TU_PAGINA_WIKI.html'">Regresar al Interactivo</button>
</body>
</html>
