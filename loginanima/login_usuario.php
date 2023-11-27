<?php
    session_start();
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

    $validar = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$email' and contrasena='$contrasena'  ");

    if(mysqli_num_rows($validar) > 0 ){
        $_SESSION["email"] = $email;
        $_SESSION["nombre"] = $nombre;
        $_SESSION["contrasena"] = $contrasena;
        header("location: ../index2.php");
        exit;
    }else{
        echo'
            <script>
                alert("Este usuario no existe porfavor verifica tus datos baboso");
                window.location = "login.php";
            </script>
        ';
        exit();
    }
    
    $conn->close();


   


?>
