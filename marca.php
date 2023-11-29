<!DOCTYPE HTML>
<html>
    
	<head>
		<title>Marcas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo2.jpg" alt="" /></span><span class="title">InfPhone</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>

									</ul>
								</nav>
								<nav id="menu">
									<h2>Menu</h2>
									<ul>
										<li><a href="index.php">Home</a></li>
										
									</ul>
								</nav>
						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Celulares de la marca</h1>
								<p>Algunos de los celulares mas conocidos de la marca</p>
							</header>
							<section class="tiles">
								<?php
								$marca = $_GET["marca"];
								include "conexion.php";

								$sql = "SELECT * FROM celulares where marca = '$marca'";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo'
									<article>
										<span class="image">
											<img src="'.$row["imagen"].'" alt="" />
										</span>
										<a href="celular.php?celular='.$row["nombre"].'">
											<h2>'.$row["nombre"].'</h2>
											<div class="content">
												<p>Celular de gama '.$row["gama"].'</p>
											</div>
										</a>
									</article>
									';
								}
								} else {
								echo "0 results";
								}
								$conn->close();
								?>
							</section>
						</div>
					</div>

				
					
			</div>

		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
  // Función para manejar el clic en los artículos
  function handleCellClick(nombreCelular) {
    window.location.href = 'celular.php?nombreCelular=' + encodeURIComponent(nombreCelular);
  }

  // Asigna la función a cada artículo
  document.querySelectorAll('article').forEach(function(article) {
    article.addEventListener('click', function() {
      var nombreCelular = this.querySelector('h2').innerText;
      handleCellClick(nombreCelular);
    });
  });
</script>
	</body>
</html>