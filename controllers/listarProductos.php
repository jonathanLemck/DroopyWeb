<?php

//	controllers./ListarProductos.php

require '../fw/fw.php';
require '../models/Productos.php';
require '../views/ListadoProductos.php';
require '../views/login.php';

$p = new Productos();
$todos = $p->getTodos();


$v = new ListadoProductos();
$v->productos = $todos;

$v->render();