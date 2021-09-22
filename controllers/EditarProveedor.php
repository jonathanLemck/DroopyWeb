<?php

// controllers/EditarProveedor.php

require '../fw/fw.php';
require '../models/Proveedores.php';
require  '../views/ProveedorEditadoOk.php';
require '../views/EditProveedor.php';
require '../views/login.php';

if(isset($_POST['editar'])){
	
	//me fijo q existan y las manso
	if(!isset($_POST['id'])) die ('error 1');
	if(!isset($_POST['nombre'])) die ('error 1');
	if(!isset($_POST['direccion'])) die ('error 1');
	if(!isset($_POST['envio'])) die ('error 1');
	if(!isset($_POST['telefono'])) die ('error 1');

	$prov = new Proveedores();
	$datos = $prov->datosDeUnProveedor($_POST['id']);

	$v = new EditProveedor();
	$v->datosProveedor = $datos;

	$v->render();

}

if(isset($_POST['actualizar'])){
	$flag=true;
	if(!isset($_POST['id'])) die ('error 1');
	if(!isset($_POST['nombre'])) die ('error 1');
	if(!isset($_POST['direccion'])) die ('error 1');
	if(!isset($_POST['envio'])) die ('error 1');
	if(!isset($_POST['telefono'])) die ('error 1');

	$prov = new Proveedores();
	$prov->EditarProveedor($_POST['id'], $_POST['nombre'], $_POST['direccion'], $_POST['envio'], $_POST['telefono']);

	$v = new ProveedorEditadoOk();
	$v->nombre = $_POST['nombre'];
	$v->render();

}



