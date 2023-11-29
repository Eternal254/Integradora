<?php
$servername = "localhost";
$username = "id21329754_eternal";
$password = "C0mand0cer0@";
$dbname = "id21329754_integra";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
