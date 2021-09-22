<?php

//controllers/EliminarProveedor.php

require '../fw/fw.php';
require '../models/Proveedores.php';
require '../views/EliminarProveedor.php';
require '../views/BuscadorProveedor.php';
require '../views/ProvEliminadoOK.php';
require '../views/ListadoProveedores.php';
require '../views/login.php';

if(isset($_POST['eliminar'])){

	if(!isset($_POST['id'])) die('error');
	if(!isset($_POST['nombre'])) die ('error');

	$v = new EliminarProveedor();

	$v->id = $_POST['id'];
	$v->nombre = $_POST['nombre'];

	$v->render();

}

if(isset($_POST['si'])){


	if(!isset($_POST['id'])) die('error');
	if(!isset($_POST['nombre'])) die ('error 4');

	$prov = new Proveedores();
	$prov->eliminarProv($_POST['id']);

	$v = new ProvEliminadoOK();
	$v->nombre = $_POST['nombre'];

	$v->render();
}

if(isset($_POST['no'])){

	$p = new Proveedores();
	$prov = $p->getTodos();

	$v1= new BuscadorProveedor();
	$v2= new ListadoProveedores();
	$v2->proveedores=$prov;

	$v1->render();
	$v2->render();
}



