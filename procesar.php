<?php
$conexion = mysqli_connect("sql302.infinityfree.com","if0_40475193","Keyet123","if0_40475193_programacion");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

$query = "INSERT INTO visita (nombre, comentario) VALUES ('$nombre', '$comentario')";

if (!mysqli_query($conexion, $query)) {
    die("Error al insertar datos: " . mysqli_error($conexion));
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gracias</title>
</head>
<body>
    <h1>¡Gracias por participar!</h1>
    <p>Tu comentario fue guardado correctamente 🎉</p>

    <a href="listado.php">
        <button>Ver libro de visitas</button>
    </a>
</body>
</html>
