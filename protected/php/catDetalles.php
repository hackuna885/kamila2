<?php 

include("../../assets/inc/iniPagina.inc");
include("../../assets/inc/nav.inc");


error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');


$_GET['idProducto'] = 1;


if (isset($_GET['idProducto']) && !empty($_GET['idProducto'])) {


	$con = new SQLite3("../data/catalogo.db") or die("Problemas para conectar!");


	######## Esta parte es la imagen principal xzoom ########


	$cs = $con -> query("SELECT nomObj_catProd,mod_catProd,mat_catProd,diam_catProd,alt_catProd,imgDesCat_catProd,imgDibujoTec_catProd FROM catProd WHERE id = '$_GET[idProducto]'");

		while ($resul = $cs -> fetchArray()) {

			$modObj = $resul['nomObj_catProd']; // Modelo
			$numModCat = $resul['mod_catProd']; // Número Modelo Catalogo
			$matMod = $resul['mat_catProd']; // Material del Modelo
			$diam_catProd = $resul['diam_catProd']; // Diámetro
			$alt_catProd = $resul['alt_catProd']; // Altura
			$imgDesCat = $resul['imgDesCat_catProd']; // Imagen del Catalogo DC
			$imgDibTec = $resul['imgDibujoTec_catProd']; // Dibujo Técnico del Catalogo DT

		}

		

		$imgXzoom = '<img class="xzoom img-fluid rounded mx-auto d-block" id="xzoom-default" src="../../catalogo/img/dc/preview/'.$imgDesCat.'" xoriginal="../../catalogo/img/dc/original/'.$imgDesCat.'" />';

		$imgDibujoTec = '<img src="../../catalogo/img/dt/'.$imgDibTec.'" class="img-fluid">';


	######## Esta parte es la imagen principal xzoom ########



}


 ?>

<!-- INICIA DETALLE -->

<div class="container my-5">
	
	<div class="row">
		<div class="col-12 col-md-2 order-3 order-md-1">
			<h5>NUEVOS MODELOS</h5>
			<p>Conoce nuestros nuevos modelos !!!</p>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/n1.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/n3.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/n2.jpg" alt="Third slide">
				    </div>
				  </div>
				</div>
				<br>
			<a href="#" class="btn btn-outline-secondary mx-auto d-block mb-5" role="button">Más detalles</a>

			<br>
			<h5>LÁMPARAS</h5>
			<p>Línea clásica.</p>
				<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/l1.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/l2.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/l3.jpg" alt="Third slide">
				    </div>
				  </div>
				</div>
				<br>
			<a href="#" class="btn btn-outline-secondary mx-auto d-block mb-5" role="button">Más detalles</a>

			<br>
			<h5>QUINQUÉS</h5>
			<p>Estilo clásico.</p>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/q1.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/q2.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100 rounded" src="../../catalogo/slide/q3.jpg" alt="Third slide">
				    </div>
				  </div>
				</div>
				<br>
			<a href="#" class="btn btn-outline-secondary mx-auto d-block mb-5" role="button">Más detalles</a>
		</div>
		<div class="col-12 col-md-7 order-1 order-md-2">
			<h2><?php echo $modObj; ?></h2>
			<div class="row">
				<div class="col-12 col-md-7">
					<h3><?php echo $numModCat; ?></h3>
					<h4><?php echo $matMod; ?></h4>
				</div>
				<div class="col-12 col-md-5 align-self-center">
					<p class="h3 text-danger text-center card-block my-auto">$ 0,000.00</p>
				</div>
			</div>

			<!-- INICIA LA GALERIA XZOOM -->

			<div class="container my-3">
			    <div class="row">

			      <div class="large-5 column mx-auto">
			        <div class="xzoom-container">
						

					  	<?php echo $imgXzoom; ?>

				        <div class="xzoom-thumbs">

				        	<?php 


	######## Esta parte crea el catalogo de la vista previa y el zoom ########


			$cs2 = $con -> query("SELECT nomObj_catProd,mod_catProd,mat_catProd,imgDesCat_catProd FROM catProd WHERE nomObj_catProd ='$modObj' ORDER BY mod_catProd");




				while ($resul2 = $cs2 -> fetchArray()) {

					$modObj2 = $resul2['nomObj_catProd']; // Modelo
					$numModCat2 = $resul2['mod_catProd']; // Número Modelo Catalogo
					$matMod2 = $resul2['mat_catProd']; // Material del Modelo
					$imgDesCat2 = $resul2['imgDesCat_catProd']; // Imagen del Catalogo DC

				echo '

					<div class="cImg">
					<a href="../../catalogo/img/dc/original/'.$imgDesCat2.'">
				        <img class="xzoom-gallery" width="80" src="../../catalogo/img/dc/thumbs/'.$imgDesCat2.'" xpreview="../../catalogo/img/dc/preview/'.$imgDesCat2.'" title="MOD. '.$numModCat2.' '.$matMod2.'">
				    </a>
				    <span>MOD. '.$numModCat2.'</span>
				    </div>


				';

				}

	######## Esta parte crea el catalogo de la vista previa y el zoom ########

	$con -> close();



				        	 ?>



			          	</div>

			        </div>        
			      </div>
			      
			    </div>
			</div>

			<!-- TERMINA LA GALERIA XZOOM -->

			<div class="container my-3">
				<div class="row">
					
					<div class="col-12 col-md-12 col-lg-8 mx-auto">
						<div class="row">
							<div class="col-10 text-center">
								<b>Diámetro: <?php echo $diam_catProd; ?></b>
							</div>
							<div class="col-10 mx-auto">
										<?php echo $imgDibujoTec; ?>
							</div>
							<div class="col-2 texto-vertical-1 text-center">
								<b>Altura: <?php echo $diam_catProd; ?></b>
							</div>
						</div>
					</div>
						
					
				</div>
			</div>

		</div>
		<div class="col-12 col-md-3 order-2 order-md-2 mb-5">
			<h5>COMPRAR CON NOSOTROS</h5>
			<h6>PAGOS SEGUROS</h6>
			<p>A traves de Deposito o transferencia bancaria a nuestras cuentas en Bancomer, Santander, Banorte.
			<br><br>
			Tarjeta de Credito a Debito por medio de Mercadopago.

			</p>
			<h6>CALIDAD</h6>
			<p>
				Te ofrecemos los mejores productos a mejor costo.
			</p>
			<h6>ENVÍOS SEGUROS</h6>
			<p>Enviamos a toda la república.</p>

			<div class="row">
				<div class="col-12 col-lg-6">
					<select class="custom-select">
					  <option value="1" selected>1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="3">4</option>
					  <option value="3">5</option>
					</select>
				</div>
				<div class="col-12 col-lg-6">
					<button type="button" class="btn btn-success btn-block">Comprar</button>
				</div>
			</div>

		</div>
	</div>

</div>

<!-- TERMINA DETALLE -->

<!-- INICIA LOS MAS VENDIDOS -->

<div class="container-fluid fondoGrisRallas">
	<div class="container">
		<div class="row text-center bg-white">
			<div class="col-12 col-sm-4 mx-auto order-md-1">
				<img class="img-fluid rounded" src="../../catalogo/masVendidos/ultimo101.jpg" alt="">
			</div>
			<div class="col-12 col-sm-4 mx-auto order-sm-2 order-md-4">
				<br>
				<h5>LAMPARA FLORENCIA</h5>
				<h6>MOD. 101</h6>
				<br>
				<a href="#" class="btn btn-outline-secondary mx-auto d-block mb-5" role="button">Más detalles</a>
			</div>
			<div class="col-12 col-sm-4 mx-auto order-md-2">
				<img class="img-fluid rounded" src="../../catalogo/masVendidos/ultimo237.jpg" alt="">
			</div>
			<div class="col-12 col-sm-4 mx-auto order-sm-4 order-md-5">
				<br>
				<h5>COLGANTE KAMI</h5>
				<h6>MOD. 240</h6>
				<br>
				<a href="#" class="btn btn-outline-secondary mx-auto d-block mb-5" role="button">Más detalles</a>
			</div>
			<div class="col-12 col-sm-4 mx-auto order-md-3">
				<img class="img-fluid rounded" src="../../catalogo/masVendidos/ultimo240.jpg" alt="">
			</div>
			<div class="col-12 col-sm-4 mx-auto order-md-6">
				<br>
				<h5>COLGANTE KAMI</h5>
				<h6>MOD. 240</h6>
				<br>
				<a href="#" class="btn btn-outline-secondary mx-auto d-block mb-5" role="button">Más detalles</a>
			</div>
		</div>
	</div>
</div>


<!-- TERMINA LOS MAS VENDIDOS -->


<?php 

include("../../assets/inc/footer.inc");
include("../../assets/inc/finPagina.inc");

 ?>