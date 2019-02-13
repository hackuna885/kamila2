
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<title>Kamila Iluminación Residencial</title>
</head>
<body>

	<!-- INICIA MENU -->
	
	<div class="container-fluid cabecera">
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

		<!-- TERMINA CATALOGO -->

		<!-- INICIA FOOTER -->

		<div class="container-fluid pie">
			<div class="container">
				<p class="display-4 text-center pt-5">Contáctanos</p>
				<p class="subtitulo text-center pb-4">Te ofrecemos, asesoría profesional.</p>

				<div class="row py-5">
					<div class="col-12 col-sm-6">
						<form action="" method="post">
							<div class="row">
								<div class="form-group col-12 col-sm-6">
									<input type="text" class="form-control" placeholder="Nombre"/>
								</div>
								<div class="form-group col-12 col-sm-6">
									<input type="text" class="form-control" placeholder="Correo"/>
								</div>
								<div class="form-group col-12">
									<textarea class="form-control" rows="5" placeholder="Mensaje"></textarea>
								</div>
								<div class="form-group col-12 col-sm-6 col-lg-4">
									<input type="submit" class="btn btn-outline-secondary btn-lg container-fluid" value="Enviar"/>
								</div>
								<div class="form-group col-12 col-sm-6 col-lg-4">
									<button type="button" class="btn btn-outline-secondary btn-lg container-fluid">Limpiar</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-12 col-sm-6">
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-12 col-sm-6">
										<a href="#" class="text-muted">Link 1</a>
										<hr>
									</div>
									<div class="col-12 col-sm-6">
										<a href="#" class="text-muted">Link 2</a>
										<hr>
									</div>

									<div class="col-12 col-sm-6">
										<a href="#" class="text-muted">Link 3</a>
										<hr>
									</div>
								</div>
							</div>
						</div>
								
						
					</div>
				</div>
				<hr>

				<div class="row footerTexto">
					<div class="col-md-12 okfooter align-middle my-3">
								<p class="text-center">© kamila. Todos los derechos reservados. | Diseñado por: <a href="http://veltosystems.com/" class="text-muted">veltosystems.com</a></p>
					</div>
				</div>
		
			</div>
		</div>

	<!-- TERMINA FOOTER -->
	



	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/popper.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>