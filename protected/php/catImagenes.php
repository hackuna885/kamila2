<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

date_default_timezone_set('America/Mexico_City');

if (empty($_GET['pag'])) {
	$pag = 1;
}else{
	$pag = $_GET['pag'];
}


	$con = new SQLite3("../data/catalogo.db") or die("Problemas para conectar!");




	$cs = $con -> query("SELECT COUNT(nomObj_catProd) AS noRegs FROM catProd WHERE catEst_catProd = '1' AND activo_catProd = '1'");

	while ($resul = $cs -> fetchArray()) {

		$noRegs = $resul['noRegs']; //Numero de Registros dentro de una tabla
	}

	$cpm = 9; //Esta es la cantidad de filas para mostrar
	$ultimapag = ceil($noRegs/$cpm); //Numero de Registro entre Numero de Filas nos da, el numero de Hojas
	$pag = (int)$pag; //Convierte el valo de Pagina en Numerico

	if ($pag < 0) {
		$pag = 1;
	}elseif ($pag > $ultimapag){
		$pag = $ultimapag;
	}


	$cs2 = $con -> query("SELECT * FROM catProd WHERE catEst_catProd = '1' AND activo_catProd = '1' LIMIT ($pag-1) * $cpm,$cpm");

	while ($resul2 = $cs2 -> fetchArray()) {

		$idProducto = $resul2['id'];
		$nomObjeto = $resul2['nomObj_catProd'];
		$modelo = $resul2['mod_catProd'];
		$material = $resul2['mat_catProd'];
		$imgCat = $resul2['imgCat_catProd'];

		echo'<div class="col-12 col-sm-6 col-md-4">
				<a href="../catDetalles/kamila.aspx?idProducto='.$idProducto.'">
				<img src="../catalogo/img/c/'; echo $imgCat.'" class="img-fluid rounded mx-auto d-block mb-3">
				</a>
				<h4 class="text-center">'; echo $nomObjeto.'</h4>
				<h5 class="text-center text-muted">'; echo $modelo.'</h5>
				<p class="text-center">'; echo $material.'</p>
				<a href="../catDetalles/kamila.aspx?idProducto='.$idProducto.'" class="btn btn-outline-secondary mx-auto d-block mb-5" role="button">Más detalles</a>
			</div>
		';
	}





 ?>