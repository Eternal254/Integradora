<?php

session_start();

?>


<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<!-- Theme Made By www.w3schools.com - No Copyright -->
		<title>InfPhone</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<title>InfPhone</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> 
		
		<style>
		body {
		  font: 400 15px/1.8 Lato, sans-serif;
		  color: #777;
		}
		h3, h4 {
		  margin: 10px 0 30px 0;
		  letter-spacing: 10px;      
		  font-size: 20px;
		  color: #111;
		}
		.container {
		  padding: 80px 120px;
		}
		.person {
		  border: 10px solid transparent;
		  margin-bottom: 25px;
		  width: 80%;
		  height: 80%;
		  opacity: 0.7;
		}
		.person:hover {
		  border-color: #f1f1f1;
		}
		.carousel-inner img {
		  -webkit-filter: grayscale(90%);
		  filter: grayscale(90%); /* make all photos black and white */ 
		  width: 100%; /* Set width to 100% */
		  margin: auto;
		}
		.carousel-caption h3 {
		  color: #fff !important;
		}
		@media (max-width: 600px) {
		  .carousel-caption {
			display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
		  }
		}
		.nav-tabs li a {
    color: #777;
  }
  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .p {
	text-align: center;
	color: blue;
  }
		
		
		</style>
		<!--<title>InfPhone</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> -->
	</head>
	<body class="is-preload">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"</li>
			  <li data-target="#myCarousel" data-slide-to="2"</li>
			</ol>
		
			<!-- Imagenes Carrusel -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img src="images/s23c.jpg" alt=" " width="600" height="300">
				<div class="carousel-caption">
				  <h3>S23 Ultra</h3>
				  <p>Power redefined. Amazing screen</p>
				</div>      
			  </div>
		
			  <div class="item">
				<img src="images/oppo2.jpg" alt=" " width="600" height="300">
				<div class="carousel-caption">
				  <h3>Oppo </h3>
				  <p>Discover excellence in every detail</p>
				</div>      
			  </div>
			
			  <div class="item">
				<img src="images/iphone2.jpg" alt=" " width="600" height="300">
				<div class="carousel-caption">
				  <h3>Iphone 15</h3>
				  <p>The future in your hands</p>
				</div>      
			  </div>
			  <!-- Botones de control -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
			</div>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="indexeng2.php" class="logo">
									<span class="symbol"><img src="images/logo2.jpg" alt="" /></span><span class="title">InPhone</span>
								</a>

							<!-- Nav -->
								

						</div>
					</header>

				<!-- Menu -->
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
					  <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>                        
						</button>
						
						<img src="images/logo2.jpg"  width="55" h2>Infphone</h2> 
					  </div>
					  
					  <div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
						  <li><a href="#myCarousel">HOME</a></li>
						  <li><a href="#contact">CONTACT</a></li>
						  <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown">LANGUAGE
        		<span class="caret"></span></a>
        			<ul class="dropdown-menu">
        				<li><a href="indexeng2.php">ENGLISH</a></li>
        				<li><a href="index2.php">ESPAÑOL</a></li>
			</ul>
						  
							  <li><a href="loginanima/cerrar_sesioneng.php">LOG OUT</a></li> 

						  <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
						</ul>
					  </div>
					</div>
				  </nav>


				<!-- Main -->
				
					<div id="main">
						<div class="inner">
							<header>
								<h1>Page for cell phone consultation</a>.</h1>
<p>This is a page so you can get information about different mobile devices.</p>
							</header>
							<section class="tiles">
							<?php
								include "conexion.php";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								}

								$sql = "SELECT * FROM marcas";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo'
									<article class="style2">
										<span class="image">
											<img src="images/'.$row["foto"].'" alt="" />
										</span>
										<a href="marcaeng.php?marca='.$row["nombre"].'">
											<h2>'.$row["nombre"].'</h2>
											<div class="content">
												<p>'.$row["description"].'</p>
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

	</body>
</html>
















<!--<div id="tour" class="bg-1">
	<div class="container">
	  <h3 class="text-center">TOUR DATES</h3>
	  <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
	  <ul class="list-group">
		<li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
		<li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
		<li class="list-group-item">November <span class="badge">3</span></li> 
	  </ul>
	  
	  <div class="row text-center">
		<div class="col-sm-4">
		  <div class="thumbnail">
			<img src="paris.jpg" alt="Paris" width="400" height="300">
			<p><strong>Paris</strong></p>
			<p>Friday 27 November 2015</p>
			<button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
		  </div>
		</div>
		<div class="col-sm-4">
		  <div class="thumbnail">
			<img src="newyork.jpg" alt="New York" width="400" height="300">
			<p><strong>New York</strong></p>
			<p>Saturday 28 November 2015</p>
			<button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
		  </div>
		</div>
		<div class="col-sm-4">
		  <div class="thumbnail">
			<img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
			<p><strong>San Francisco</strong></p>
			<p>Sunday 29 November 2015</p>
			<button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
		  </div>
		</div>
	  </div>
	</div> -->
	