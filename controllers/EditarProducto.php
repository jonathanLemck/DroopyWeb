<?php

// controllers/EditarProducto.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../models/Proveedores.php';
require '../models/Categorias.php';
require  '../views/ProductoEditadoOk.php';
require '../views/EditProducto.php';
require '../views/login.php';




	$prod = new Productos();
	$pr = new Proveedores();
	$c = new Categorias();

	$datos = $prod->datosDeUnProducto($_POST['id']);
	$prov = $pr->getTodos();
	$cate = $c->getTodos();

	

	$v = new EditProducto();
	$v->datosProducto = $datos;
	$v->proveedores = $prov;
	$v->categorias = $cate;

	


if(isset($_POST['actualizar'])){
	$flag=true;
	

	$prov = new Productos();
	$prov->EditarProducto($_POST['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['cantidad'], $_POST['precio_compra'], $_POST['precio_venta'], $_POST['id_proveedor'],$_POST['categoria_id']);


	$v = new ProductoEditadoOk();
	$v->nombre = $_POST['nombre'];
	

}


$v->render();
