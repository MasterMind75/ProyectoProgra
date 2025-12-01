<?php
$conexion = mysqli_connect("sql302.infinityfree.com","if0_40475193","Keyet123","if0_40475193_programacion");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$resultado = mysqli_query($conexion, "SELECT nombre, comentario FROM visitas ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libro de Visitas</title>
</head>
<body>
    <h2>Comentarios Registrados</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Nombre</th>
            <th>Comentario</th>
        </tr>

        <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['comentario'] ?></td>
        </tr>
        <?php } ?>

    </table>

    <br>
    <a href="index.html"><button>Regresar al interactivo</button></a>

</body>
</html>

<?php mysqli_close($conexion); ?>
