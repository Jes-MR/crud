<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM datos WHERE ID=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $sql = "UPDATE datos SET nombre='$nombre', apellido='$apellido', edad=$edad WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Registro</h1>
    <form method="POST">
        <label>Nombre: </label><input type="text" name="nombre" value="<?= $data['nombre'] ?>" required><br>
        <label>Apellido: </label><input type="text" name="apellido" value="<?= $data['apellido'] ?>" required><br>
        <label>Edad: </label><input type="number" name="edad" value="<?= $data['edad'] ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html>