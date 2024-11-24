<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO datos (Nombre, Apellido, Edad) VALUES ('$nombre', '$apellido', $edad)";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Agregar Nuevo Registro</h1>
    <form method="POST">
        <label>Nombre: </label><input type="text" name="nombre" required><br>
        <label>Apellido: </label><input type="text" name="apellido" required><br>
        <label>Edad: </label><input type="number" name="edad" required><br>
        <button type="submit">Guardar</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html>
