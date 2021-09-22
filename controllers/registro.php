<?php


//controllers/registro.php

require '../fw/fw.php';
require '../models/Proveedores.php';
require '../models/registro.php';
require '../views/formAltaRegistro.php';
require '../views/login.php';
require '../views/registroAgregado.php';
require '../views/registroNO.php';


$p = new Proveedores();



if(isset($_POST['producto'])) {

	if(!isset($_POST['proveedor'])) die ("error 1");
	if(!isset($_POST['producto'])) die ("error 2");
	if(!isset($_POST['cantidad'])) die ("error 3");
	if(!isset($_POST['precio_unidad'])) die ("error 4");
	if(!isset($_POST['fecha'])) die ("error 5");
	







	$r = new Registro();

	$r->registrar($_POST['proveedor'],$_POST['producto'],$_POST['cantidad'],$_POST['precio_unidad'],$_POST['precio_total'],$_POST['fecha'],$_POST['compraventa']);


		$v = new registroAgregado();

	
	


}


else {



$todosP = $p->getTodos();

$v = new formAltaRegistro();
$v->proveedor = $todosP;

}


$v->render();