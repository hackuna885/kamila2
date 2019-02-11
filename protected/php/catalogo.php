
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<title>KAMILA</title>
</head>
<body>
	<!-- INICIA MENU -->
	<div class="container-fluid">
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
		  <a class="navbar-brand" href="#">KAMILA</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">¿Quiénes somos?</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Catalogo</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contacto</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Correo</a>
		      </li>
		      <!-- <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li> -->
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Buscar productos..." aria-label="Search">
		      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
		  </div>
		</nav>
		</div>
	</div>
	
	<!-- TERMINA MENU -->

	<!-- INICIA CATALOGO -->

	<div class="container">
		<br>
		<p class="display-4 mt-5">¡Conoce nuestro catalogo!</p>
		<p class="subtitulo mb-4">Estilos y formas de tipo neoclásico y contemporáneo.</p>
		<br>
		<div class="row">

			<?php 

			include("catImagenes.php");

			 ?>
	
		</div>

		<!-- INICIA NUMERACIÓN HOJAS CATALOGO -->

		<div class="row">
			<div class="col-12 text-center my-5">
				<?php 
					include("catPagina.php");
				 ?>
				
			</div>
		</div>
		<!-- TERMINA NUMERACIÓN HOJAS CATALOGO -->

		</div>
	</div>

	<!-- TERMINA CATALOGO -->



	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/popper.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>