<?php

//controllers/EliminarProducto.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/EliminarProducto.php';
require '../views/BuscadorProducto.php';
require '../views/ProdEliminadoOK.php';
require '../views/ListadoProductos.php';
require '../views/login.php';

if(isset($_POST['eliminar'])){

	if(!isset($_POST['id'])) die('error');
	if(!isset($_POST['nombre'])) die ('error');

	$v = new EliminarProducto();

	$v->id = $_POST['id'];
	$v->nombre = $_POST['nombre'];

	$v->render();

}

if(isset($_POST['si'])){


	if(!isset($_POST['id'])) die('error');
	if(!isset($_POST['nombre'])) die ('error 4');

	$prov = new Productos();
	$prov->eliminarProd($_POST['id']);

	$v = new ProdEliminadoOK();
	$v->nombre = $_POST['nombre'];

	$v->render();
}

if(isset($_POST['no'])){

	$p = new Productos();
	$prov = $p->getTodos();

	$v1= new BuscadorProducto();
	$v2= new ListadoProductos();
	$v2->productos=$prov;

	$v1->render();
	$v2->render();
}