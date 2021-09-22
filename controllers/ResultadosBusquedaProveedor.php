<?php

	//controllers/ResultadoBusquedaProveedor.php

	require '../fw/fw.php';
	require '../models/Proveedores.php';
	require '../views/ResultadoBuscadorProv.php';
	require '../views/SinResultados.php';
	require '../views/login.php';

	if(isset($_GET['buscar'])){

		if(!isset($_GET['nombre'])) die('error aaaa');
		$p= new Proveedores();

		$resultado = $p->proveedorLike($_GET['nombre']);

		if(count($resultado)>0){
			//view q recorre cada una.
			$v= new ResultadoBuscadorProv();
			$v->proveedores=$resultado;
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
	