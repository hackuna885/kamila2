<?php 

	$siguiente = $pag+1;
	$anterior = $pag-1;


	if ($pag == 1) {

		echo "<span  class='btn btn-outline-secondary btn-lg'>Anterior</span><span class='btn btn-dark btn-lg'>1</span>";

		for ($i=2; $i <= $ultimapag ; $i++) { 
			echo '<a class="btn btn-outline-secondary btn-lg" href="?pag='.$i.'?">'.$i.'</a>';
		}

	}

	if ($pag != 1 && $pag > 1) {
		echo '<a class="btn btn-outline-secondary btn-lg" href="?pag='.$anterior.'?"> Anterior</a>';
	}

	for ($c=1; $c <= $ultimapag ; $c++) { 
		if ($c == $pag && $pag != 1) {
			echo "<span class='btn btn-dark btn-lg'>".$c."</span>";
		}elseif($pag != 1){
			echo '<a class="btn btn-outline-secondary btn-lg" href="?pag='.$c.'?">'.$c.'</a>';
		}
	}

	if ($pag < $ultimapag) {
		echo '<a class="btn btn-outline-secondary btn-lg" href="?pag='.$siguiente.'?"> Siguiente</a>';
	}else{
		echo "<span class='btn btn-outline-secondary btn-lg'>Siguiente</span>";
	}

	



	

	$con -> close();

 ?>