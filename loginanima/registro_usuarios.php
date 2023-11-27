<?php

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$contrasena=$_POST["contrasena"];

include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nombre, email, contrasena)
VALUES ('$nombre', '$email', '$contrasena')";

$verificacion = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$email' ");

if(mysqli_num_rows($verificacion) > 0 ){
    echo'
        <script>
            alert("Este correo ya esta registrado, intenta con uno nuevo");
            window.location = "login.php";
        </script>
    ';
    exit();
    
    
}

$verificacion = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre='$nombre' ");

if(mysqli_num_rows($verificacion) > 0 ){
    echo'
        <script>
            alert("Este nombre ya esta registrado, intenta con uno nuevo");
            window.location = "login.php";
        </script>
    ';
    exit();
    
    
}

if ($conn->query($sql) === TRUE) {
  echo "Reguistro Exitoso";
  header('refresh: 0; url=../index2.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

