<?php
$celular = $_GET["celular"];
include "conexion.php";

$sql = "SELECT * FROM celulares WHERE nombre = '$celular'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nombre=$row["nombre"];
    $marca=$row["marca"];
    $precio=$row["precio"];
    $rom=$row["rom"];
    $ram=$row["ram"];
    $imagen=$row["imagen"];
    $resena=$row["resena"];
  }
}
$conn->close();
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <title>Muestra de celular</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        body {
            background-color: #f8f9fa; /* Gris claro */
            color: #343a40; /* Negro */
        }
        .jumbotron {
            background-color: #343a40; /* Gris oscuro */
            color: #ffd700; /* Dorado */
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        table {
            width: 100%;
            color: #343a40; /* Negro */
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #343a40; /* Gris oscuro */
            color: #ffd700; /* Dorado */
        }
    </style>
</head>
<body class="is-preload">
    <div id="wrapper">
        <header id="header">
            <div class="inner">
                <a href="index.php" class="logo">
                    <span class="symbol"><img src="images/logo2.jpg" alt="" /></span><span class="title">InfPhone</span>
                </a>
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>

        <div id="main">
            <div class="inner">
                <div class="jumbotron">
                    <h1 class="display-4">Muestra de celular</h1>
                </div>
<div class="row">
    <div class="col-md-6">
        <img src="<?php echo $imagen;?>" alt="Descripción de la imagen" class="img-fluid" style="max-width: 85%; margin: 0 auto;">
    </div>
    <div class="col-md-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Precio</th>
                                    <th>ROM</th>
                                    <th>RAM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $nombre; ?></td>
                                    <td><?php echo $marca; ?></td>
                                    <td><?php echo "$" . $precio; ?></td>
                                    <td><?php echo $rom; ?></td>
                                    <td><?php echo $ram; ?></td>
                                </tr>
                            </tbody>
                        </table>
                                                        <?php echo $resena; ?>
                                                        <br>
                            <?php include "comentarios/index.php" ?>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="inner">
                <!-- Contenido del pie de página -->
            </div>
        </footer>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
</html>