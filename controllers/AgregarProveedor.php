<?php

//controllers/AgregarProveedor.php

require '../fw/fw.php';
require '../models/Proveedores.php';
require '../views/ProveedorAgregado.php';
require '../views/FormAltaProveedor.php';
require '../views/login.php';


if(count($_POST)>0){
	
	if(!isset($_POST['nombre'])) die('error 1');
	if(!isset($_POST['direccion'])) die('error 2');
	if(!isset($_POST['telefono'])) die('error 3');
	if(!isset($_POST['envio'])) die('error 4');

	$prov = new Proveedores();
	$prov-> AgregarProveedor($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['envio']);

	$v = new ProveedorAgregado();
}
else{
	
	$v = new FormAltaProveedor();
}

$v->render();

