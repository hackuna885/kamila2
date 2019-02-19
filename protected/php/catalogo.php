<?php 

include("../../assets/inc/iniPagina.inc");
include("../../assets/inc/nav.inc");

 ?>

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

<?php 


include("../../assets/inc/footer.inc");
include("../../assets/inc/finPagina.inc");


 ?>