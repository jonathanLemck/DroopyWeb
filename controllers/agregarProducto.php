<?php

// controllers/AgregarProducto.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../models/Proveedores.php';
require'../models/Categorias.php';
require '../views/FormAltaProductos.php';
require '../views/ProductoAgregado.php';
require '../views/login.php';

$c = new Categorias();
$p = new Proveedores();


if(isset($_POST['cantidad'])) {


	if(!isset($_POST['categoria'])) die ("error 1");
	if(!isset($_POST['nombre'])) die ("error 2");
	if(!isset($_POST['descripcion'])) die ("error 3");
	if(!isset($_POST['cantidad'])) die ("error 4");
	if(!isset($_POST['compra'])) die ("error 5");
	if(!isset($_POST['venta'])) die ("error 6");
	if(!isset($_POST['proveedor'])) die ("error 7");

 $pro = new Productos();
 $pro->agregarProducto($_POST['categoria'], $_POST['nombre'],$_POST['descripcion'],$_POST['cantidad'],$_POST['compra'],$_POST['venta'], $_POST['proveedor'] );


 $v = new ProductoAgregado();

}
else {

$todosC = $c->getTodos();
$todosP = $p->getTodos();


$v = new FormAltaProductos();
$v->categorias = $todosC;
$v->proveedor = $todosP;

}


$v->render();