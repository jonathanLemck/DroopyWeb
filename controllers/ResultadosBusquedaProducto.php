<?php

	//controllers/ResultadoBusquedaProducto.php

	require '../fw/fw.php';
	require '../models/Productos.php';
	require '../views/ResultadoBuscadorProd.php';
	require '../views/SinResultados.php';
	require '../views/login.php';
	

	if(isset($_GET['buscar'])){

		if(!isset($_GET['nombre'])) die('error nombre');
		$p= new Productos();

		$resultado = $p->productoLike($_GET['nombre']);

		if(count($resultado)>0){
			//view q recorre cada una.
			$v= new ResultadoBuscadorProd();
			$v->productos=$resultado;
		}
		else{
			//view q me dice q no hay nada y volver.
			$v = new SinResultados();
		}

		$v->render();

	}
	else{

		die('error 1');
	}
	