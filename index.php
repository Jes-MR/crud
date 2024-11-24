<?php
include 'db.php';

$sql = "SELECT * FROM datos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Básico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de Registros</h1>
    <a href="crear.php">Agregar Nuevo</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= $row['Nombre'] ?></td>
                <td><?= $row['Apellido'] ?></td>
                <td><?= $row['Edad'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $row['ID'] ?>">Editar</a>
                    <a href="delete.php?id=<?= $row['ID'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
