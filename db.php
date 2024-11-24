<?php  
$host ="localhost";
$user ="root";
$port ="33065";
$password = "";
$database ="jesus";

$conn =new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
